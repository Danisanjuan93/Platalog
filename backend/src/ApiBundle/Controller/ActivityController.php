<?php

namespace ApiBundle\Controller;
use EntityBundle\Entity\Users;
use EntityBundle\Entity\Activity;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
* @RouteResource("activity")
*/

class ActivityController extends ApiController
{

    /**
     * @View(serializerGroups={"api"})
     */

    public function getAction($finca)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT a
            FROM  EntityBundle:Activity a
            WHERE (a.deletedAt IS NULL OR a.deletedAt >= :date) 
	    AND a.finca = :finca
	    ORDER BY a.deletedAt DESC')->setParameters(['finca' => $finca, 'date' => new \DateTime("-1440 minute")]);
	$activities = $query->setMaxResults(30);
        $activities = $query->getResult();
        if ($activities!= null) {
            return $activities;
        };
        return new JsonResponse(['Error' => 'No se han encontrado actividades'], 404);
    }

    /**
     * @View(serializerGroups={"api"})
     */

    public function finishedAction()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT a
            FROM  EntityBundle:Activity a
            WHERE a.state = :state
            ORDER BY a.deletedAt DESC')->setParameter('state', 'Finalizada');
	$activity = $query->setMaxResults(20);
        $activity = $query->getResult();
        if ($activity!= null) {
            return $activity;
        };
        return new JsonResponse(['Error' => 'No se han encontrado actividades'], 404);
    }

    /**
     * @View(serializerGroups={"api"})
     */

    public function getActivityAction($worker){
      $em = $this->getDoctrine()->getManager();
      $query = $em->createQuery(
          'SELECT a
          FROM  EntityBundle:Activity a
          WHERE a.worker = :worker
          AND a.state != \'Finalizada\'
          AND a.deletedAt IS NULL')->setParameter('worker', $worker);
      $activity = $query->getResult();
      if ($activity!= null) {
          return $activity;
      };
      return new JsonResponse(['Error' => 'No se han encontrado actividades'], 404);
    }

    public function postAction(Request $request)
    {
        $activity = new Activity();
        $form = $this->getForm(\EntityBundle\Form\ActivityType::class, $activity, 'POST');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $this->get('entity_model_activity')->create($activity);
            return new JsonResponse();
        }
        return $this->formErrorResponse($form);
    }

    public function patchStateAction(\EntityBundle\Entity\Activity $activity)
    {
        $activity->setState("Finalizada");
        $activity->setDeletedAt(new \DateTime('now'));
        $this->get('entity_model_activity')->update($activity);
        return new JsonResponse();
    }

    public function deleteAction(\EntityBundle\Entity\Activity $activity)
    {
        $this->get('entity_model_activity')->delete($activity);
        return [];
    }
}
