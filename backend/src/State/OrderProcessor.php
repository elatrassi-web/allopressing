<?php

namespace App\State;

use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProcessorInterface;
use App\Entity\Order;
use App\Entity\Customer;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class OrderProcessor implements ProcessorInterface
{
    public function __construct(
        #[Autowire(service: 'api_platform.doctrine.orm.state.persist_processor')]
        private readonly ProcessorInterface $persistProcessor,
        private readonly EntityManagerInterface $entityManager,
        private readonly MailerInterface $mailer
    ) {}

    public function process(mixed $data, Operation $operation, array $uriVariables = [], array $context = []): mixed
    {
        if (!$data instanceof Order) {
            return $this->persistProcessor->process($data, $operation, $uriVariables, $context);
        }

        // 1. Generate Tracking Code if not present
        if (!$data->getTrackingCode()) {
            $data->setTrackingCode(strtoupper(uniqid('ORD-')));
        }

        // 2. Handle Customer Deduplication based on Email
        $customerData = $data->getCustomer();
        if ($customerData && $customerData->getEmail()) {
            $existingCustomer = $this->entityManager->getRepository(Customer::class)
                ->findOneBy(['email' => $customerData->getEmail()]);

            if ($existingCustomer) {
                // Update existing customer info (optional, here we just attach it)
                $existingCustomer->setName($customerData->getName());
                $existingCustomer->setPhone($customerData->getPhone());
                $existingCustomer->setAddress($customerData->getAddress());
                $data->setCustomer($existingCustomer);
            }
        }

        // 3. Persist the Order and Customer
        $result = $this->persistProcessor->process($data, $operation, $uriVariables, $context);

        // 4. Send Confirmation & Notification Emails
        try {
            // Confirmation Email to Customer
            $email = (new Email())
                ->from('hello@allopressing.com')
                ->to($data->getCustomer()->getEmail())
                ->subject('Confirmation de votre commande AlloPressing - ' . $data->getTrackingCode())
                ->text('Bonjour ' . $data->getCustomer()->getName() . ', votre commande a bien été enregistrée. Voici votre code de suivi : ' . $data->getTrackingCode());

            $this->mailer->send($email);

            // Notification Email to Admin
            $adminEmail = (new Email())
                ->from('hello@allopressing.com')
                ->to('admin@allopressing.com')
                ->subject('Nouvelle commande - ' . $data->getTrackingCode())
                ->text('Une nouvelle commande a été passée par ' . $data->getCustomer()->getName() . '. Code : ' . $data->getTrackingCode());

            $this->mailer->send($adminEmail);
        } catch (\Exception $e) {
            // Silently fail for the mock/testing environment so the process completes
        }

        return $result;
    }
}
