<?php

namespace ApiBundle\Controller;

use EntityBundle\Entity\Users;
use EntityBundle\Entity\Finca;
use EntityBundle\Entity\UserFinca;
use Entitybundle\Repository\UsersRepository;
use EntityBundle\Form\AppType;
use EntityBundle\Form\UsersType;
use FOS\OAuth2ServiceBundle\Tests\Storage\User;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;

/**
 * @RouteResource("users")
 */
class UsersController extends ApiController
{
    /**
     * @View(serializerGroups={"api"})
     */

    public function postRegisterAction(Request $request)
    {
        // 1) build the form
        $user = new Users();
        $form = $this->getForm(\EntityBundle\Form\UsersType::class, $user, 'POST');

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $user->setPlainPassword($form['password']->getData());
            // 4) save the User!
            $this->get('entity_model_user_app')->create($user);

            return new JsonResponse(['userID' => $user->getId()]);
        }
        return $this->formErrorResponse($form);
    }

        /**
     *
     * @View(serializerGroups={"api"})
     * @Security("has_role('ROLE_APP') or has_role('ROLE_MANAGER')")
     */
    public function getAction()
    {
        if($this->getUser()->hasRole('ROLE_APP')) {
            return ['User' => $this->getUser(), 'Role' => "1"];
        }else{
            return ['User' => $this->getUser(), 'Role' => "0"];
        }
    }

    /**
    * @View(serializerGroups={"api"})
    * @Security("has_role('ROLE_MANAGER')")
    */
    public function getWorkersAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT DISTINCT uf
            FROM  EntityBundle:UserFinca uf
            WHERE uf.finca = :finca') ->setParameter('finca', $id);
        $workers = $query->getResult();
        if ($workers != null) {
            return $workers;
        };
        return new JsonResponse(['Error' => 'No se han encontrado trabajadores'], 404);
    }

    /**
     *
     * @View(serializerGroups={"api"})
     * @Security("has_role('ROLE_APP')")
     */
    public function patchAction(Request $request)
    {
        $form = $this->getForm(\EntityBundle\Form\AppType::class, $this->getUser()->getApp(), 'PATCH', array('to_api' => true ));
        $form->handleRequest($request);

        if ($form->isValid()) {
            return $this->get('entity_model_user_app')->update($this->getUser());
        }

        return $this->formErrorResponse($form);
    }

    /**
     *
     * @View(serializerGroups={"api"})
     * @Security("has_role('ROLE_APP') or has_role('ROLE_MANAGER')")
     */
     public function patchFincaAction(\EntityBundle\Entity\Finca $finca, \EntityBundle\Entity\Users $worker)
     {
         $parameters = array(
             'users' => $worker,
             'finca' => $finca
         );

         $em = $this->getDoctrine()->getManager();
         $query = $em->createQuery(
             'SELECT uf
             FROM  EntityBundle:UserFinca uf
             WHERE uf.users = :users
             AND uf.finca = :finca')->setParameters($parameters);
         $uF = $query->getResult();
         if ($uF == null){
             $userFinca = new UserFinca();
             $userFinca->setUsers($worker);
             $userFinca->setFinca($finca);
             $this->get('entity_model_user_app')->update($worker, $userFinca);
             return new JsonResponse(['fincaID' => $finca->getId()]);
         }
         return new JsonResponse(['Error' => 'No se ha podido asociar a la finca'], 404);
     }

    /**
     *
     * @View(serializerGroups={"api"})
     * @Security("has_role('ROLE_APP') or has_role('ROLE_MANAGER')")
     */
    public function patchLogoutAction()
    {
        $app = $this->getUser()->getApp();

        $app->setPlatform(null);
        $app->setDeviceId(null);
        $app->setTokenId(null);

        $this->getDoctrineManager()->persist($app);
        $this->getDoctrineManager()->flush();

        return null;
    }

}
