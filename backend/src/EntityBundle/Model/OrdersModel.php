<?php

namespace EntityBundle\Model;


class OrdersModel
{
    private $_em;

    public function __construct($entityManager)
    {
        $this->_em = $entityManager;
        $this->_em->getConnection()->getConfiguration()->setSQLLogger(null);
    }

    public function create(\EntityBundle\Entity\Orders $orders)
    {
        $orders->setState("Pendiente");
        $this->_em->persist($orders);
        $this->_em->flush();

        return $orders;
    }

    public function delete(\EntityBundle\Entity\Orders $orders)
    {
        $orders->setDeletedAt(new \DateTime('now'));
        $orders->setState("Borrado");
        $this->_em->persist($orders);
        $this->_em->flush();
        return $orders;
    }

    public function update(\EntityBundle\Entity\Orders $orders)
    {
        $this->_em->persist($orders);
        $this->_em->flush();
        return $orders;
    }
}
