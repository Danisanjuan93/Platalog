<?php

namespace ApiBundle\Controller;

use EntityBundle\Entity\Note;
use EntityBundle\Form\NoteType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use Symfony\Component\HttpFoundation\Response;

/**
 * @RouteResource("note")
 */
class NoteController extends ApiController
{
    /**
     * @View(serializerGroups={"api"})
     */

    public function getAction($fincaId)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT n
            FROM  EntityBundle:Note n
            WHERE n.finca = :finca
            AND n.deletedAt IS NULL')->setParameter('finca', $fincaId);
        $notes = $query->getResult();
        if ($notes != null) {
            return $notes;
        };
        return new JsonResponse(['Error' => 'No se han encontrado notas'], 404);
    }

    public function postAction(Request $request)
    {
        $note = new Note();
        $form = $this->getForm(\EntityBundle\Form\NoteType::class, $note, 'POST');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->get('entity_model_note')->create($note);
            return new JsonResponse();
        }
        return $this->formErrorResponse($form);
    }

    public function deleteAction(\EntityBundle\Entity\Note $note)
    {
        $this->get('entity_model_note')->delete($note);
        return [];
    }

    public function patchAction(\EntityBundle\Entity\Note $note, Request $request)
    {
        $form = $this->getForm(\EntityBundle\Form\NoteType::class, $note, 'PATCH');
        $form->handleRequest($request);
        $this->get('entity_model_note')->update($note);
        return new JsonResponse();
    }

}
