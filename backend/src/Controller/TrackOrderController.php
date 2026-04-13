<?php

namespace App\Controller;

use App\Repository\OrderRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class TrackOrderController extends AbstractController
{
    #[Route('/api/track/{trackingCode}', name: 'api_track_order', methods: ['GET'])]
    public function track(string $trackingCode, OrderRepository $orderRepository): JsonResponse
    {
        $order = $orderRepository->findOneBy(['trackingCode' => $trackingCode]);

        if (!$order) {
            return $this->json(['message' => 'Commande introuvable'], 404);
        }

        return $this->json([
            'trackingCode' => $order->getTrackingCode(),
            'status' => $order->getStatus(),
            'totalAmount' => $order->getTotalAmount()
        ]);
    }
}
