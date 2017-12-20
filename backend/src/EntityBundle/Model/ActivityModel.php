<?php

namespace EntityBundle\Model;


class ActivityModel
{
    private $_em;

    public function __construct($entityManager)
    {
        $this->_em = $entityManager;
        $this->_em->getConnection()->getConfiguration()->setSQLLogger(null);
    }

    public function create(\EntityBundle\Entity\Activity $activity)
    {
        $activity->setState("Pendiente");
        $this->_em->persist($activity);
        $this->_em->flush();

        return $activity;
    }

    public function update(\EntityBundle\Entity\Activity $activity)
    {
        $this->_em->persist($activity);
        $this->_em->flush();
        return $activity;
    }

    public function delete (\EntityBundle\Entity\Activity $activity)
    {
        $activity->setDeletedAt(new \DateTime('now'));
        $this->_em->persist($activity);
        $this->_em->flush();
        return $activity;
    }
}