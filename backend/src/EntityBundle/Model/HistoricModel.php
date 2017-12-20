<?php

namespace EntityBundle\Model;


class HistoricModel
{
    private $_em;

    public function __construct($entityManager)
    {
        $this->_em = $entityManager;
        $this->_em->getConnection()->getConfiguration()->setSQLLogger(null);
    }

    public function create(\EntityBundle\Entity\Historic $historic)
    {
        $this->_em->persist($historic);
        $this->_em->flush();
        return $historic;
    }

    public function update(\EntityBundle\Entity\Historic $historic)
    {
        $this->_em->persist($historic);
        $this->_em->flush();
        return $historic;
    }

}
