<?php

namespace ApiBundle\Controller;

use EntityBundle\Form\App\AppType;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * @RouteResource("reset")
 */
class ResetController extends ApiController
{
    /**
     *
     * @View(serializerGroups={"api"})
     */
    public function patchAction(Request $request)
    {
        $form    = $this->getForm( \EntityBundle\Form\App\ResettingUserAppType::class, null, 'PATCH');
        $form->handleRequest($request);

        if ($form->isValid()) {

            /** @var $user UserInterface */
            $user = $this->get('fos_user.user_manager')->findUserByUsernameOrEmail($form->get('email')->getData());

            if (null === $user) {
                return new JsonResponse(["error" => 'invalid_username'], 402);
            }

            if ( !$user->hasRole('ROLE_APP') ) {
                return new JsonResponse(["error" => 'invalidRole'], 405);
            }

            if ($user->isPasswordRequestNonExpired($this->container->getParameter('fos_user.resetting.token_ttl'))) {
                return new JsonResponse(["error" => 'passwordAlreadyRequested'], 403);
            }

            if (null === $user->getConfirmationToken()) {
                /** @var $tokenGenerator \FOS\UserBundle\Util\TokenGeneratorInterface */
                $tokenGenerator = $this->get('fos_user.util.token_generator');
                $user->setConfirmationToken($tokenGenerator->generateToken());
            }

            $this->get('fos_user.mailer')->sendResettingEmailMessage($user);
            $user->setPasswordRequestedAt(new \DateTime());
            $this->get('fos_user.user_manager')->updateUser($user);

            return new JsonResponse(["error" => 'sendResettingEmail'], 200);
        }

        return $this->formErrorResponse($form);

    }

}
