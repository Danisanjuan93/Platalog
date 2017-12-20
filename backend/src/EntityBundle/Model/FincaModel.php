<?php

namespace EntityBundle\Model;


class FincaModel
{
    private $_em;

    public function __construct($entityManager)
    {
        $this->_em = $entityManager;
        $this->_em->getConnection()->getConfiguration()->setSQLLogger(null);
    }

    public function create(\EntityBundle\Entity\Finca $finca, \EntityBundle\Entity\UserFinca $userFinca)
    {
        $finca->setTotalBananaTree(0);
	$finca->setLimitDate(new \DateTime('now'));
        $this->_em->persist($finca);
        $this->_em->persist($userFinca);
        $this->_em->flush();

        return $finca;
    }

    public function update(\EntityBundle\Entity\Finca $finca)
    {
        $this->_em->persist($finca);
        $this->_em->flush();
        return $finca;
    }
}
