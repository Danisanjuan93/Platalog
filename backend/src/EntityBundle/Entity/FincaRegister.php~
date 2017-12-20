<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Groups;

/**
 * FincaRegister
 *
 * @ORM\Table(name="finca_register")
 * @ORM\Entity(repositoryClass="EntityBundle\Repository\FincaRegisterRepository")
 */
class FincaRegister
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Groups({"api"})
     * @Expose()
     */
    private $id;

    /**
     * @var float
     * @Groups({"api"})
     * @Expose()
     * @ORM\Column(name="totalBenefits", type="float")
     */
    private $totalBenefits;

    /**
     * @var int
     * @Groups({"api"})
     * @Expose()
     * @ORM\Column(name="SownParcel", type="integer")
     */
    private $sownParcel;

    /**
     * @var int
     * @Groups({"api"})
     * @Expose()
     * @ORM\Column(name="CollectParcel", type="integer")
     */
    private $collectParcel;

    /**
     * @var float
     * @Groups({"api"})
     * @Expose()
     * @ORM\Column(name="CollectWeight", type="float")
     */
    private $collectWeight;

    /**
     * @var \DateTime
     * @Groups({"api"})
     * @Expose()
     * @ORM\Column(name="RegisterDate", type="date")
     */
    private $registerDate;

    /**
     * @var int
     * @Groups({"api"})
     * @Expose()
     * @ORM\Column(name="HandsNumber", type="integer")
     */
    private $handsNumber;

    /**
     * @var Finca
     * @Groups({"api"})
     * @Expose()
     * @ORM\ManyToOne(targetEntity="EntityBundle\Entity\Finca", inversedBy="fincaRegister", cascade={"persist"})
     */
    private $finca;

    /**
     * @var float
     * @Groups({"api"})
     * @Expose()
     * @ORM\Column(name="SalablePercent", type="float")
     */
    private $salablePercent;

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
     * Set totalBenefits
     *
     * @param float $totalBenefits
     *
     * @return FincaRegister
     */
    public function setTotalBenefits($totalBenefits)
    {
        $this->totalBenefits = $totalBenefits;

        return $this;
    }

    /**
     * Get totalBenefits
     *
     * @return float
     */
    public function getTotalBenefits()
    {
        return $this->totalBenefits;
    }

    /**
     * Set sownParcel
     *
     * @param integer $sownParcel
     *
     * @return FincaRegister
     */
    public function setSownParcel($sownParcel)
    {
        $this->sownParcel = $sownParcel;

        return $this;
    }

    /**
     * Get sownParcel
     *
     * @return int
     */
    public function getSownParcel()
    {
        return $this->sownParcel;
    }

    /**
     * Set collectParcel
     *
     * @param integer $collectParcel
     *
     * @return FincaRegister
     */
    public function setCollectParcel($collectParcel)
    {
        $this->collectParcel = $collectParcel;

        return $this;
    }

    /**
     * Get collectParcel
     *
     * @return int
     */
    public function getCollectParcel()
    {
        return $this->collectParcel;
    }

    /**
     * Set collectWeight
     *
     * @param float $collectWeight
     *
     * @return FincaRegister
     */
    public function setCollectWeight($collectWeight)
    {
        $this->collectWeight = $collectWeight;

        return $this;
    }

    /**
     * Get collectWeight
     *
     * @return float
     */
    public function getCollectWeight()
    {
        return $this->collectWeight;
    }

    /**
     * Set registerDate
     *
     * @param \DateTime $registerDate
     *
     * @return FincaRegister
     */
    public function setRegisterDate($registerDate)
    {
        $this->registerDate = $registerDate;

        return $this;
    }

    /**
     * Get registerDate
     *
     * @return \DateTime
     */
    public function getRegisterDate()
    {
        return $this->registerDate;
    }

    /**
     * Set handsNumber
     *
     * @param integer $handsNumber
     *
     * @return FincaRegister
     */
    public function setHandsNumber($handsNumber)
    {
        $this->handsNumber = $handsNumber;

        return $this;
    }

    /**
     * Get handsNumber
     *
     * @return integer
     */
    public function getHandsNumber()
    {
        return $this->handsNumber;
    }

    /**
     * Set finca
     *
     * @param \EntityBundle\Entity\Finca $finca
     *
     * @return FincaRegister
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
     * Set salablePercent
     *
     * @param float $salablePercent
     *
     * @return FincaRegister
     */
    public function setSalablePercent($salablePercent)
    {
        $this->salablePercent = $salablePercent;

        return $this;
    }

    /**
     * Get salablePercent
     *
     * @return float
     */
    public function getSalablePercent()
    {
        return $this->salablePercent;
    }

    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     *
     * @return FincaRegister
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
}
