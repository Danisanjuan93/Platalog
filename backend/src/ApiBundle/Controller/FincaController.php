<?php

namespace ApiBundle\Controller;

use Doctrine\DBAL\Types\JsonArrayType;
use EntityBundle\Entity\Finca;
use EntityBundle\Entity\UserFinca;
use EntityBundle\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use Symfony\Component\HttpFoundation\Response;

/**
 * @RouteResource("finca")
 */
class FincaController extends ApiController
{
    /**
     * @View(serializerGroups={"api"})
     */
    public function getAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT uf
            FROM  EntityBundle:UserFinca uf
            WHERE uf.users = :users') ->setParameter('users', $id);
        $fincas = $query->getResult();
        if ($fincas != null) {
            return $fincas;
        };
        return new JsonResponse(['Error' => 'No se ha encontrado finca'], 404);
    }

    public function postAction(Request $request)
    {
        $finca = new Finca();
        $form = $this->getForm(\EntityBundle\Form\FincaType::class, $finca, 'POST');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $userFinca = new UserFinca();
            $userFinca->setFinca($finca);
            $userFinca->setUsers($this->getUser());
            $this->get('entity_model_finca')->create($finca, $userFinca);
            return new JsonResponse(['fincaID' => $finca->getId()]);
        }
        return $this->formErrorResponse($form);
    }

    public function patchEstatetypeAction(\EntityBundle\Entity\Finca $finca, $state)
    {
        $finca->setEstateType($state);
        $this->get('entity_model_finca')->update($finca);
        return new JsonResponse();
    }
    public function patchIrrigationtypeAction(\EntityBundle\Entity\Finca $finca, $irrigationtype)
    {
        $finca->setIrrigationType($irrigationtype);
        $this->get('entity_model_finca')->update($finca);
        return new JsonResponse();
    }
    public function patchPlantvarietyAction(\EntityBundle\Entity\Finca $finca, $plantvariety)
    {
        $finca->setPlantVariety($plantvariety);
        $this->get('entity_model_finca')->update($finca);
        return new JsonResponse();
    }
    public function patchTotalbananatreeAction(\EntityBundle\Entity\Finca $finca, $bananaTree)
    {
        $finca->setTotalBananaTree($bananaTree);
        $this->get('entity_model_finca')->update($finca);
        return new JsonResponse();
    }
    public function patchLimitdateAction(\EntityBundle\Entity\Finca $finca, $date){
      $finca->setLimitDate(new \DateTime($date));
      $this->get('entity_model_finca')->update($finca);
      return new JsonResponse();
    }
}
