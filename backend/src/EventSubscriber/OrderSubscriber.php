<?php

namespace App\EventSubscriber;

use ApiPlatform\Symfony\EventListener\EventPriorities;
use App\Entity\Order;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\ViewEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

final class OrderSubscriber implements EventSubscriberInterface
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::VIEW => ['onPreWrite', EventPriorities::PRE_WRITE],
        ];
    }

    public function onPreWrite(ViewEvent $event): void
    {
        $order = $event->getControllerResult();
        $method = $event->getRequest()->getMethod();

        if (!$order instanceof Order || Request::METHOD_POST !== $method) {
            return;
        }

        // Generate tracking code
        if (!$order->getTrackingCode()) {
            $order->setTrackingCode(strtoupper(uniqid('ORD-')));
        }

        try {
            // Confirmation Email to Customer
            $email = (new Email())
                ->from('hello@allopressing.com')
                ->to($order->getCustomer()->getEmail())
                ->subject('Confirmation de votre commande AlloPressing - ' . $order->getTrackingCode())
                ->text('Bonjour ' . $order->getCustomer()->getName() . ', votre commande a bien été enregistrée. Voici votre code de suivi : ' . $order->getTrackingCode());

            $this->mailer->send($email);

            // Notification Email to Admin
            $adminEmail = (new Email())
                ->from('hello@allopressing.com')
                ->to('admin@allopressing.com')
                ->subject('Nouvelle commande - ' . $order->getTrackingCode())
                ->text('Une nouvelle commande a été passée par ' . $order->getCustomer()->getName() . '. Code : ' . $order->getTrackingCode());

            $this->mailer->send($adminEmail);
        } catch (\Exception $e) {
            // In a production environment, you might log this error.
            // For now we continue to ensure the order is saved even if mail fails.
        }
    }
}
