<?php

namespace App\Controller;


use App\Classe\Cart;
use App\Entity\Order;
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Symfony\Component\HttpFoundation\JsonResponse;

class StripeController extends AbstractController
{
    #[Route('/commande/create-session/{reference}', name: 'app_stripe_create_session')]
    public function index(EntityManagerInterface $entityManager,Cart $cart, $reference): Response
    {
       
            $products_for_stripe = [];

            $YOUR_DOMAIN = 'http://178.32.107.35:8001';

            $order = $entityManager->getRepository( Order::class)->findOneByReference($reference);

            if (!$order) {
                new JsonResponse(['error' => 'order']);
            }

            foreach ($order->getOrderDetails()->getValues() as $product) {
                $product_object = $entityManager->getRepository(Product::class)->findOneByName($product->getProduct());
               
                $products_for_stripe[] = [
                    'price_data' => [
                        'currency' => 'eur',
                        'unit_amount' => $product->getPrice(),
                        'product_data' => [
                            'name' => $product->getProduct(),
                            'images' => [$YOUR_DOMAIN."/uploads/".$product_object->getIllustration()],
                        ],
                    ],
                    'quantity' => $product->getQuantity(),
                ];

            }

           
               
            $products_for_stripe[] = [
                'price_data' => [
                    'currency' => 'eur',
                    'unit_amount' => $order->getCarrierPrice(),
                    'product_data' => [
                        'name' => $order->getCarrierName(),
                        'images' => [$YOUR_DOMAIN],
                    ],
                ],
                'quantity' => 1,
            ];

          
            Stripe::setApiKey('sk_test_51OcP7LArxMno9hPmETEJuvnV0y9i8xJcWFnmV0HOfhQ5f91WQdlbU8wgWxwqXyE0eSTjlKKNGwUBSMRebKA7UJgV00qsr8l1ZJ');

            
            $checkout_session = Session::create([
                'line_items' => [
                    $products_for_stripe
                ],
                'mode' => 'payment',
                'success_url' => $YOUR_DOMAIN . '/commande/merci/{CHECKOUT_SESSION_ID}',
                'cancel_url' => $YOUR_DOMAIN . '/commande/erreur/{CHECKOUT_SESSION_ID}',
              ]);

              
            $order->setStripSessionId($checkout_session->id);
            $entityManager->flush();
            $response = new JsonResponse(['id'=> $checkout_session->id]);
            

            return $response;
    }
}
