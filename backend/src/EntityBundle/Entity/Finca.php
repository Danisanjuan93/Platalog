<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Groups;

/**
 * Finca
 *
 * @ORM\Table(name="finca")
 * @ORM\Entity(repositoryClass="EntityBundle\Repository\FincaRepository")
 */
class Finca
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @Groups({"api"})
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Expose()
     */
    private $id;

    /**
     * @var Users
     * @ORM\OneToMany(targetEntity="EntityBundle\Entity\UserFinca", mappedBy="finca", cascade={"persist"})
     */
    private $users;

    /**
     * @var Orders
     * @ORM\OneToMany(targetEntity="EntityBundle\Entity\Orders", mappedBy="finca", cascade={"persist"})
     */
    private $orders;

    /**
     * @var Activity
     * @ORM\OneToMany(targetEntity="EntityBundle\Entity\Activity", mappedBy="finca", cascade={"persist"})
     */
    private $activity;

    /**
     * @var Note
     * @ORM\OneToMany(targetEntity="EntityBundle\Entity\Note", mappedBy="finca", cascade={"persist"})
     * @Groups({"api"})
     * @Expose()
     */
    private $note;

    /**
     * @var string
     * @Groups({"api"})
     * @Expose()
     * @ORM\Column(name="estateType", type="string", length=255)
     */
    private $estateType;

    /**
     * @var string
     * @Groups({"api"})
     * @Expose()
     * @ORM\Column(name="irrigationType", type="string", length=255)
     */
    private $irrigationType;

    /**
     * @var string
     * @Groups({"api"})
     * @Expose()
     * @ORM\Column(name="plantVariety", type="string", length=255)
     */
    private $plantVariety;

    /**
     * @var int
     * @Groups({"api"})
     * @Expose()
     * @ORM\Column(name="totalBananaTree", type="integer", nullable=true)
     */

    private $totalBananaTree;

    /**
     * @var FincaRegister
     * @ORM\OneToMany(targetEntity="EntityBundle\Entity\FincaRegister", mappedBy="finca", cascade={"persist"})
     */
    private $fincaRegister;

    /**
     * @var string
     * @Groups({"api"})
     * @Expose()
     * @ORM\Column(name="location", type="string", length=255)
     */
    private $location;

    /**
     * @var string
     * @Groups({"api"})
     * @Expose()
     * @ORM\Column(name="fincaName", type="string", length=255)
     */
    private $fincaName;

    /**
     * @var \Date
     * @Groups({"api"})
     * @Expose()
     * @ORM\Column(name="limitDate", type="date", nullable=true)
     */
    private $limitDate;


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
     * Set users
     *
     * @param \stdClass $users
     *
     * @return Finca
     */
    public function setUsers($users)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return \stdClass
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set orders
     *
     * @param string $orders
     *
     * @return Finca
     */
    public function setOrders($orders)
    {
        $this->orders = $orders;

        return $this;
    }

    /**
     * Get orders
     *
     * @return string
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * Set estateType
     *
     * @param string $estateType
     *
     * @return Finca
     */
    public function setEstateType($estateType)
    {
        $this->estateType = $estateType;

        return $this;
    }

    /**
     * Get estateType
     *
     * @return string
     */
    public function getEstateType()
    {
        return $this->estateType;
    }

    /**
     * Set irrigationType
     *
     * @param string $irrigationType
     *
     * @return Finca
     */
    public function setIrrigationType($irrigationType)
    {
        $this->irrigationType = $irrigationType;

        return $this;
    }

    /**
     * Get irrigationType
     *
     * @return string
     */
    public function getIrrigationType()
    {
        return $this->irrigationType;
    }

    /**
     * Set plantVariety
     *
     * @param string $plantVariety
     *
     * @return Finca
     */
    public function setPlantVariety($plantVariety)
    {
        $this->plantVariety = $plantVariety;

        return $this;
    }

    /**
     * Get plantVariety
     *
     * @return string
     */
    public function getPlantVariety()
    {
        return $this->plantVariety;
    }

    /**
     * Set totalBananaTree
     *
     * @param integer $totalBananaTree
     *
     * @return Finca
     */
    public function setTotalBananaTree($totalBananaTree)
    {
        $this->totalBananaTree = $totalBananaTree;

        return $this;
    }

    /**
     * Get totalBananaTree
     *
     * @return int
     */
    public function getTotalBananaTree()
    {
        return $this->totalBananaTree;
    }

    /**
     * Set fincaRegister
     *
     * @param string $fincaRegister
     *
     * @return Finca
     */
    public function setFincaRegister($fincaRegister)
    {
        $this->fincaRegister = $fincaRegister;

        return $this;
    }

    /**
     * Get fincaRegister
     *
     * @return string
     */
    public function getFincaRegister()
    {
        return $this->fincaRegister;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return Finca
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set fincaName
     *
     * @param string $fincaName
     *
     * @return Finca
     */
    public function setFincaName($fincaName)
    {
        $this->fincaName = $fincaName;

        return $this;
    }

    /**
     * Get fincaName
     *
     * @return string
     */
    public function getFincaName()
    {
        return $this->fincaName;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
        $this->orders = new \Doctrine\Common\Collections\ArrayCollection();
        $this->activity = new \Doctrine\Common\Collections\ArrayCollection();
        $this->note = new \Doctrine\Common\Collections\ArrayCollection();
        $this->fincaRegister = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add user
     *
     * @param \EntityBundle\Entity\UserFinca $user
     *
     * @return Finca
     */
    public function addUser(\EntityBundle\Entity\UserFinca $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \EntityBundle\Entity\UserFinca $user
     */
    public function removeUser(\EntityBundle\Entity\UserFinca $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Add order
     *
     * @param \EntityBundle\Entity\Orders $order
     *
     * @return Finca
     */
    public function addOrder(\EntityBundle\Entity\Orders $order)
    {
        $this->orders[] = $order;

        return $this;
    }

    /**
     * Remove order
     *
     * @param \EntityBundle\Entity\Orders $order
     */
    public function removeOrder(\EntityBundle\Entity\Orders $order)
    {
        $this->orders->removeElement($order);
    }

    /**
     * Add activity
     *
     * @param \EntityBundle\Entity\Activity $activity
     *
     * @return Finca
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

    /**
     * Add note
     *
     * @param \EntityBundle\Entity\Note $note
     *
     * @return Finca
     */
    public function addNote(\EntityBundle\Entity\Note $note)
    {
        $this->note[] = $note;

        return $this;
    }

    /**
     * Remove note
     *
     * @param \EntityBundle\Entity\Note $note
     */
    public function removeNote(\EntityBundle\Entity\Note $note)
    {
        $this->note->removeElement($note);
    }

    /**
     * Get note
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Add fincaRegister
     *
     * @param \EntityBundle\Entity\FincaRegister $fincaRegister
     *
     * @return Finca
     */
    public function addFincaRegister(\EntityBundle\Entity\FincaRegister $fincaRegister)
    {
        $this->fincaRegister[] = $fincaRegister;

        return $this;
    }

    /**
     * Remove fincaRegister
     *
     * @param \EntityBundle\Entity\FincaRegister $fincaRegister
     */
    public function removeFincaRegister(\EntityBundle\Entity\FincaRegister $fincaRegister)
    {
        $this->fincaRegister->removeElement($fincaRegister);
    }

    /**
     * Set limitDate
     *
     * @param \DateTime $limitDate
     *
     * @return Finca
     */
    public function setLimitDate($limitDate)
    {
        $this->limitDate = $limitDate;

        return $this;
    }

    /**
     * Get limitDate
     *
     * @return \DateTime
     */
    public function getLimitDate()
    {
        return $this->limitDate;
    }
}
