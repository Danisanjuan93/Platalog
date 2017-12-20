<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Groups;

/**
 * UserFinca
 *
 * @ORM\Table(name="user_finca")
 * @ORM\Entity(repositoryClass="EntityBundle\Repository\UserFincaRepository")
 */
class UserFinca
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Users
     * @ORM\ManyToOne(targetEntity="EntityBundle\Entity\Users", inversedBy="userfinca", cascade={"persist"})
     * @Groups({"api"})
     * @Expose()
     */
    private $users;

    /**
     * @var Finca
     * @ORM\ManyToOne(targetEntity="EntityBundle\Entity\Finca", inversedBy="userfinca", cascade={"persist"})
     * @Groups({"api"})
     * @Expose()
     */
    private $finca;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set users
     *
     * @param \EntityBundle\Entity\Users $users
     *
     * @return UserFinca
     */
    public function setUsers(\EntityBundle\Entity\Users $users = null)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return \EntityBundle\Entity\Users
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set finca
     *
     * @param \EntityBundle\Entity\Finca $finca
     *
     * @return UserFinca
     */
    public function setFinca(\EntityBundle\Entity\Finca $finca = null)
    {
        $this->finca = $finca;

        return $this;
    }

    /**
     * Get finca
     *
     * @return \EntityBundle\Entity\Finca
     */
    public function getFinca()
    {
        return $this->finca;
    }
}
