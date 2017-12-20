<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 14/10/2016
 * Time: 15:41
 */

namespace ApiBundle\Controller;

use EntityBundle\Entity\Activity;
use EntityBundle\Entity\ParcelRegister;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @RouteResource("parcelRegister")
 */

class ParcelRegisterController extends ApiController
{
    /**
     * @View(serializerGroups={"api"})
     */

    public function getAction($idParcel)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT pr
            FROM  EntityBundle:ParcelRegister pr
            WHERE pr.parcel = :parcel
            AND pr.deletedAt IS NULL')->setParameter('parcel', $idParcel);
        $parcel = $query->getResult();
        if ($idParcel != null) {
            return $parcel;
        };
        return new JsonResponse(['Error' => 'No se ha encontrado ningún registro perteneciente a esa parcela'], 404);
    }

    public function postAction(Request $request)
    {
        $parcelRegister = new ParcelRegister();
        $form = $this->getForm(\EntityBundle\Form\ParcelRegisterType::class, $parcelRegister, 'POST');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->get('entity_model_parcelRegister')->create($parcelRegister);
            return new JsonResponse();
        }
        return $this->formErrorResponse($form);
    }

    public function deleteAction(\EntityBundle\Entity\ParcelRegister $parcelRegister)
    {
        $this->get('entity_model_parcelRegister')->delete($parcelRegister);
        return [];
    }

    public function patchDataAction(\EntityBundle\Entity\ParcelRegister $parcelRegister, Request $request){
        $form = $this->getForm(\EntityBundle\Form\ParcelRegisterType::class, $parcelRegister, 'PATCH');
        $form->handleRequest($request);
        $this->get('entity_model_parcelRegister')->update($parcelRegister);
        return new JsonResponse();
    }
}