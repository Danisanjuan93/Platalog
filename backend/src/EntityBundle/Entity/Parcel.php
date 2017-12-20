<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Groups;
/**
 * Parcel
 *
 * @ORM\Table(name="parcel")
 * @ORM\Entity(repositoryClass="EntityBundle\Repository\ParcelRepository")
 */
class Parcel
{
    /**
     * @var int
     * @Groups({"api"})
     * @Expose()
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Note
     * @ORM\OneToMany(targetEntity="EntityBundle\Entity\Note", mappedBy="parcel", cascade={"persist"})
     * @Groups({"api"})
     * @Expose()
     */
    private $note;

    /**
     * @var int
     * @Groups({"api"})
     * @Expose()
     * @ORM\Column(name="bananaTreeNumber", type="integer")
     */
    private $bananaTreeNumber;

    /**
     * @var Finca
     * @ORM\ManyToOne(targetEntity="EntityBundle\Entity\Finca", inversedBy="Parcel", cascade={"persist"})
     * @Groups({"api"})
     * @Expose()
     */

    private $finca;

    /**
     * @var Activity
     * @ORM\OneToMany(targetEntity="EntityBundle\Entity\Activity", mappedBy="Parcel", cascade={"persist"})
     */

    private $activity;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     * @Groups({"api"})
     * @Expose()
     */
    private $name;

    /**
     * @var string
     * @Groups({"api"})
     * @Expose()
     * @ORM\Column(name="location", type="string", length=255)
     */
    private $location;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deletedAt", type="datetime", nullable=true)
     */
    private $deletedAt;

    /**
     * @var int
     * @ORM\OneToMany(targetEntity="EntityBundle\Entity\ParcelRegister", mappedBy="parcel", cascade={"persist"})
     */
    private $parcelRegister;

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
     * Set name
     *
     * @param string $name
     *
     * @return Parcel
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return Parcel
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
     * Constructor
     */
    public function __construct()
    {
        $this->activity = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set finca
     *
     * @param \EntityBundle\Entity\Finca $finca
     *
     * @return Parcel
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

    /**
     * Add activity
     *
     * @param \EntityBundle\Entity\Activity $activity
     *
     * @return Parcel
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
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     *
     * @return Parcel
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
     * Set bananaTreeNumber
     *
     * @param integer $bananaTreeNumber
     *
     * @return Parcel
     */
    public function setBananaTreeNumber($bananaTreeNumber)
    {
        $this->bananaTreeNumber = $bananaTreeNumber;

        return $this;
    }

    /**
     * Get bananaTreeNumber
     *
     * @return integer
     */
    public function getBananaTreeNumber()
    {
        return $this->bananaTreeNumber;
    }

    /**
     * Add parcelRegister
     *
     * @param \EntityBundle\Entity\ParcelRegister $parcelRegister
     *
     * @return Parcel
     */
    public function addParcelRegister(\EntityBundle\Entity\ParcelRegister $parcelRegister)
    {
        $this->parcelRegister[] = $parcelRegister;

        return $this;
    }

    /**
     * Remove parcelRegister
     *
     * @param \EntityBundle\Entity\ParcelRegister $parcelRegister
     */
    public function removeParcelRegister(\EntityBundle\Entity\ParcelRegister $parcelRegister)
    {
        $this->parcelRegister->removeElement($parcelRegister);
    }

    /**
     * Get parcelRegister
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getParcelRegister()
    {
        return $this->parcelRegister;
    }

    /**
     * Add note
     *
     * @param \EntityBundle\Entity\Note $note
     *
     * @return Parcel
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
}
