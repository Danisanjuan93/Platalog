<?php

namespace EntityBundle\Model;


class UserAppModel
{
    private $_em;
    private $_userManager;

    public function __construct($entityManager, $fosUserManager)
    {
        $this->_em = $entityManager;
        $this->_em->getConnection()->getConfiguration()->setSQLLogger(null);
        $this->_userManager = $fosUserManager;
    }

    public function create(\EntityBundle\Entity\Users $user)
    {
        $user->setUsername($user->getEmail());
        if ($user->getRol() == "1") {
            $user->addRole('ROLE_APP');
        }else{
            $user->addRole('ROLE_MANAGER');
        }
        $user->setEnabled(true);
        $this->_em->persist($user);
        $this->_em->flush();
        $this->_userManager->updateUser($user);

        return $user;
    }

    public function update (\EntityBundle\Entity\Users $user, \EntityBundle\Entity\UserFinca $userFinca)
    {
        $this->_em->persist($user);
        $this->_em->persist($userFinca);
        $this->_em->flush();
        $this->_userManager->updateUser($user);
        return $user;
    }

    public function delete (\EntityBundle\Entity\Users $user)
    {
        $uuId = uniqid();

        $user->setEnabled(false);
        $user->setUsername("{$user->getEmail()}_@deleted@_{$uuId}");
        $user->setEmail("{$user->getEmail()}_@deleted@_{$uuId}");
        $user->setDeletedAt(new \DateTime('now'));

        $this->_userManager->updateUser($user);
        return $user;
    }
}
