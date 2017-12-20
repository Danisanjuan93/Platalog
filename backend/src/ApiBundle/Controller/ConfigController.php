<?php

namespace ApiBundle\Controller;

use EntityBundle\Entity\Master\GlobalConfiguration;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use FOS\RestBundle\Controller\Annotations\View;

/**
 * @RouteResource("Config")
 */
class ConfigController extends ApiController
{
    /**
     * Returns all config parameters
     *
     * @View(serializerGroups={"api"})
     */
    public function getGlobalAction()
    {
        return $this->getDoctrine()->getManager()->getRepository('EntityBundle:Master\GlobalConfiguration')->findAll();
    }

}
