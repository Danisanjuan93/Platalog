<?php

namespace ApiBundle\Controller;

use EntityBundle\Entity\Activity;
use EntityBundle\Entity\FincaRegister;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @RouteResource("fincaRegister")
 */

class FincaRegisterController extends ApiController
{

    /**
     * @View(serializerGroups={"api"})
     */
    //GET

    public function getAction($idFinca)
    {
        $idFinca = $this->getDoctrine()->getRepository('EntityBundle:FincaRegister')->findByFinca($idFinca);
        if ($idFinca != null) {
            return $idFinca;
        };
        return new JsonResponse(['Error' => 'No se ha encontrado ningún registro perteneciente a esa finca'], 404);
    }

    //POST

    public function postAction(Request $request)
    {
        $fincaRegister = new FincaRegister();
        $form = $this->getForm(\EntityBundle\Form\FincaRegisterType::class, $fincaRegister, 'POST');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->get('entity_model_fincaRegister')->create($fincaRegister);
            return null;
        }
        return $this->formErrorResponse($form);
    }

    // PATCH

    // Patch TotalBenefits
    public function patchBenefitsAction(\EntityBundle\Entity\FincaRegister $fincaRegister, $benefits)
    {
        $fincaRegister->setTotalBenefits($benefits);
        $this->get('entity_model_fincaRegister')->update($fincaRegister);
        return new JsonResponse();
    }

    // Patch SownParcels
    public function patchSownparcelAction(\EntityBundle\Entity\FincaRegister $fincaRegister, $sownParcel)
    {
        $fincaRegister->setSownParcel($sownParcel);
        $this->get('entity_model_fincaRegister')->update($fincaRegister);
        return new JsonResponse();
    }

    // Patch CollectParcels
    public function patchCollectparcelAction(\EntityBundle\Entity\FincaRegister $fincaRegister, $collectParcel)
    {
        $fincaRegister->setCollectParcel($collectParcel);
        $this->get('entity_model_fincaRegister')->update($fincaRegister);
        return new JsonResponse();
    }

    // Patch CollectWeight
    public function patchCollectweightAction(\EntityBundle\Entity\FincaRegister $fincaRegister, $weight)
    {
        $fincaRegister->setCollectWeight($weight);
        $this->get('entity_model_fincaRegister')->update($fincaRegister);
        return new JsonResponse();
    }

    // Patch RegisterDate
    public function patchRegisterdateAction(\EntityBundle\Entity\FincaRegister $fincaRegister, $registerDate)
    {
        $fincaRegister->setRegisterDate($registerDate);
        $this->get('entity_model_fincaRegister')->update($fincaRegister);
        return new JsonResponse();
    }

    // Patch HandsNumber
    public function patchHandsnumberAction(\EntityBundle\Entity\FincaRegister $fincaRegister, $handsNumber)
    {
        $fincaRegister->setHandsNumber($handsNumber);
        $this->get('entity_model_fincaRegister')->update($fincaRegister);
        return new JsonResponse();
    }

    // Patch SalablePercent
    public function patchSalablepercentAction(\EntityBundle\Entity\FincaRegister $fincaRegister, $salablePercent)
    {
        $fincaRegister->setSalablePercent($salablePercent);
        $this->get('entity_model_fincaRegister')->update($fincaRegister);
        return new JsonResponse();
    }

    // DELETE

    public function deleteAction(\EntityBundle\Entity\FincaRegister $fincaRegister)
    {
        $this->get('entity_model_fincaRegister')->delete($fincaRegister);
        return new JsonResponse();
    }
}