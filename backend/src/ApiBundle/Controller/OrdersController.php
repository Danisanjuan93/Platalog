<?php

namespace ApiBundle\Controller;

use EntityBundle\Entity\Orders;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use Symfony\Component\HttpFoundation\Response;


/**
 * @RouteResource("orders")
 */

class OrdersController extends ApiController
{
    /**
     * @View(serializerGroups={"api"})
     */

    public function getAction($fincaId)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT o
            FROM  EntityBundle:Orders o
            WHERE (o.deletedAt IS NULL OR o.deletedAt >= :date)
	    AND o.finca = :finca')->setParameters(['finca' => $fincaId, 'date' => new \DateTime('-1440 minute')]);
        $orders = $query->getResult();
        if ($orders != null) {
            return $orders;
        };
        return new JsonResponse(['Error' => 'No se ha encontrado orders'], 404);
    }

    /**
     * @View(serializerGroups={"api"})
     */

    public function graphicAction()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT o
            FROM  EntityBundle:Orders o
            WHERE o.state = :state
            ORDER BY o.deletedAt ASC')->setParameter('state', 'Entregado');
        $orders = $query->getResult();
        if ($orders != null) {
            return $orders;
        };
        return new JsonResponse(['Error' => 'No se han encontrado pedidos'], 404);
    }

    public function postAction(Request $request)
    {
        $orders = new Orders();
        $form = $this->getForm(\EntityBundle\Form\OrdersType::class, $orders, 'POST');
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->get('entity_model_orders')->create($orders);
            return new JsonResponse();
        }
        return $this->formErrorResponse($form);
    }

    public function deleteAction(\EntityBundle\Entity\Orders $orders)
    {
        $this->get('entity_model_orders')->delete($orders);
        return [];
    }

    public function patchStateAction(\EntityBundle\Entity\Orders $orders, $benefits)
    {
        $orders->setState("Entregado");
        $orders->setBenefits($benefits);
        $orders->setDeletedAt(new \DateTime('now'));
        $this->get('entity_model_orders')->update($orders);
        return new JsonResponse();
    }
}
