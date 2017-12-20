<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\User as BaseUser;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Groups;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="EntityBundle\Repository\UsersRepository")
 */
class Users extends BaseUser
{
    const _ROLE_APP         = 'ROLE_APP';



    /**
     * @var int
     * @Groups({"api"})
     * @Expose()
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @var Finca
     * @Groups({"api"})
     * @Expose()
     * @ORM\OneToMany(targetEntity="EntityBundle\Entity\UserFinca", mappedBy="users", cascade={"persist"})
     */

    private $finca;
    /**
     * @var App
     *
     * @ORM\OneToOne(targetEntity="EntityBundle\Entity\App", mappedBy="users", cascade={"persist", "refresh"})
     */
    private $app;

    /**
     * @var string
     * @Groups({"api"})
     * @Expose()
     * @ORM\Column(name="firstName", type="string", length=255, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     * @Groups({"api"})
     * @Expose()
     * @ORM\Column(name="lastName", type="string", length=255, nullable=true)
     */
    private $lastName;

    /**
     * @var Activity
     *
     * @ORM\OneToMany(targetEntity="EntityBundle\Entity\Activity", mappedBy="users", cascade={"persist", "refresh"})
     */
     private $activity;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deletedAt", type="datetime", nullable=true)
     */
    private $deletedAt;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Users
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Users
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set app
     *
     * @param \EntityBundle\Entity\App $app
     *
     * @return Users
     */
    public function setApp(\EntityBundle\Entity\App $app = null)
    {
        $this->app = $app;

        return $this;
    }

    /**
     * Get app
     *
     * @return \EntityBundle\Entity\App
     */
    public function getApp()
    {
        return $this->app;
    }



    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     *
     * @return Users
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Get deletedAt
     *
     * @return \DateTime
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * Add finca
     *
     * @param \EntityBundle\Entity\UserFinca $finca
     *
     * @return Users
     */
    public function addFinca(\EntityBundle\Entity\UserFinca $finca)
    {
        $this->finca[] = $finca;

        return $this;
    }

    /**
     * Remove finca
     *
     * @param \EntityBundle\Entity\UserFinca $finca
     */
    public function removeFinca(\EntityBundle\Entity\UserFinca $finca)
    {
        $this->finca->removeElement($finca);
    }

    /**
     * Get finca
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFinca()
    {
        return $this->finca;
    }

    /**
     * var string
     */
    private $rol;

    /**
     * @return string
     */

    public function getRol(){
        return $this->rol;
    }

    /**
     * @param string $rol
     * @return string
     */

    public function setRol($rol){
        $this->rol = $rol;
        return $this;
    }

    /**
     * Add activity
     *
     * @param \EntityBundle\Entity\Activity $activity
     *
     * @return Users
     */
    public function addActivity(\EntityBundle\Entity\Activity $activity)
    {
        $this->activity[] = $activity;

        return $this;
    }

    /**
     * Remove activity
     *
     * @param \EntityBundle\Entity\Activity $activity
     */
    public function removeActivity(\EntityBundle\Entity\Activity $activity)
    {
        $this->activity->removeElement($activity);
    }

    /**
     * Get activity
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getActivity()
    {
        return $this->activity;
    }
}
