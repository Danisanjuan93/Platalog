<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 14/10/2016
 * Time: 13:53
 */

namespace EntityBundle\Model;


class FincaRegisterModel
{
    private $_em;

    public function __construct($entityManager)
    {
        $this->_em = $entityManager;
        $this->_em->getConnection()->getConfiguration()->setSQLLogger(null);
    }

    public function create(\EntityBundle\Entity\FincaRegister $fincaRegister)
    {
        $this->_em->persist($fincaRegister);
        $this->_em->flush();

        return $fincaRegister;
    }

    public function update(\EntityBundle\Entity\FincaRegister $fincaRegister)
    {
        $this->_em->persist($fincaRegister);
        $this->_em->flush();
        return $fincaRegister;
    }

    public function delete (\EntityBundle\Entity\FincaRegister $fincaRegister)
    {
        $fincaRegister->setDeletedAt(new \DateTime('now'));
        $this->_em->persist($fincaRegister);
        $this->_em->flush();
        return $fincaRegister;
    }
}