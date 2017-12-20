<?php

namespace ApiBundle\Controller;

use EntityBundle\Entity\Historic;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
* @RouteResource("historic")
*/

class HistoricController extends ApiController
{

    /**
     * @View(serializerGroups={"api"})
     */

    public function getAction()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT h
            FROM  EntityBundle:Historic h');
        $historic = $query->getResult();
        if ($historic != null) {
            return $historic;
        };
        return new JsonResponse(['Error' => 'No se han encontrado historiales'], 404);
    }

    public function postAction(Request $request)
    {
        $historic = new Historic();
        $form = $this->getForm(\EntityBundle\Form\HistoricType::class, $historic, 'POST');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $this->get('entity_model_historic')->create($historic);
            return new JsonResponse();
        }
        return $this->formErrorResponse($form);
    }

}
