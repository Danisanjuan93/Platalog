<?php

namespace ApiBundle\Controller;

use EntityBundle\Entity\Notebook;
use EntityBundle\Entity\Parcel;
use EntityBundle\Form\ParcelType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use Symfony\Component\HttpFoundation\Response;

/**
 * @RouteResource("parcel")
 */
class ParcelController extends ApiController
{
    /**
     * @View(serializerGroups={"api"})
     */

    public function getAction($fincaId)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT p
            FROM  EntityBundle:Parcel p
            WHERE p.finca = :finca
            AND p.deletedAt IS NULL')->setParameter('finca', $fincaId);
        $parcel = $query->getResult();
        if ($parcel != null) {
            return $parcel;
        };
        return new JsonResponse(['Error' => 'No se han encontrado parcelas'], 404);
    }

    public function postAction(Request $request)
    {
        $parcel = new Parcel();
        $form = $this->getForm(\EntityBundle\Form\ParcelType::class, $parcel, 'POST');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->get('entity_model_parcel')->create($parcel);
            return new JsonResponse();
        }
        return $this->formErrorResponse($form);
    }

    public function deleteAction(\EntityBundle\Entity\Parcel $parcel)
    {
        $this->get('entity_model_parcel')->delete($parcel);
        return [];
    }

    public function patchAction(\EntityBundle\Entity\Parcel $parcel, Request $request)
    {
        $form = $this->getForm(\EntityBundle\Form\ParcelType::class, $parcel, 'PATCH');
        $form->handleRequest($request);
        $this->get('entity_model_parcel')->update($parcel);
        return new JsonResponse();
    }

}
