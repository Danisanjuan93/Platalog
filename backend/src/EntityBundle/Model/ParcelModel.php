<?php

namespace EntityBundle\Model;


use EntityBundle\Entity\Note;
use EntityBundle\Entity\Notebook;
use EntityBundle\EntityBundle;

class ParcelModel
{
    private $_em;

    public function __construct($entityManager)
    {
        $this->_em = $entityManager;
        $this->_em->getConnection()->getConfiguration()->setSQLLogger(null);
    }

    public function create(\EntityBundle\Entity\Parcel $parcel)
    {
        $this->_em->persist($parcel);
        $this->_em->flush();

        return $parcel;
    }

    public function delete (\EntityBundle\Entity\Parcel $parcel)
    {
        $parcel->setDeletedAt(new \DateTime('now'));
        $this->_em->persist($parcel);
        $this->_em->flush();
        return $parcel;
    }

    public function update (\EntityBundle\Entity\Parcel $parcel)
    {
        $this->_em->persist($parcel);
        $this->_em->flush();
        return $parcel;
    }
}
