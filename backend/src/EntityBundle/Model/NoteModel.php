<?php

namespace EntityBundle\Model;


class NoteModel
{
    private $_em;

    public function __construct($entityManager)
    {
        $this->_em = $entityManager;
        $this->_em->getConnection()->getConfiguration()->setSQLLogger(null);
    }

    public function create(\EntityBundle\Entity\Note $note)
    {
        $this->_em->persist($note);
        $this->_em->flush();

        return $note;
    }

    public function delete(\EntityBundle\Entity\Note $note)
    {
        $note->setDeletedAt(new \DateTime('now'));
        $this->_em->persist($note);
        $this->_em->flush();
        return $note;
    }

    public function update(\EntityBundle\Entity\Note $note)
    {
        $this->_em->persist($note);
        $this->_em->flush();
        return $note;
    }

}
