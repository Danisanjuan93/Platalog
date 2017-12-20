<?php

namespace EntityBundle\Model;


class ParcelRegisterModel
{
    private $_em;

    public function __construct($entityManager)
    {
        $this->_em = $entityManager;
        $this->_em->getConnection()->getConfiguration()->setSQLLogger(null);
    }

    public function create(\EntityBundle\Entity\ParcelRegister $parcelRegister)
    {
        $parcelRegister->setBenefits(0);
        $parcelRegister->setCollectDate("No establecido");
        $parcelRegister->setCollectWeight(0);
        $this->_em->persist($parcelRegister);
        $this->_em->flush();

        return $parcelRegister;
    }

    public function update(\EntityBundle\Entity\ParcelRegister $parcelRegister)
    {
        $this->_em->persist($parcelRegister);
        $this->_em->flush();
        return $parcelRegister;
    }

    public function delete (\EntityBundle\Entity\ParcelRegister $parcelRegister)
    {
        $parcelRegister->setDeletedAt(new \DateTime('now'));
        $this->_em->persist($parcelRegister);
        $this->_em->flush();
        return $parcelRegister;
    }
}