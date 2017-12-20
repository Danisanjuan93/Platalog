<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Groups;

/**
 * ParcelRegister
 *
 * @ORM\Table(name="parcel_register")
 * @ORM\Entity(repositoryClass="EntityBundle\Repository\ParcelRegisterRepository")
 */
class ParcelRegister
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
     * @var string
     * @Groups({"api"})
     * @Expose()
     * @ORM\Column(name="CollectDate", type="string", nullable=true)
     */
    private $collectDate;

    /**
     * @var string
     * @Groups({"api"})
     * @Expose()
     * @ORM\Column(name="EstimateDate", type="string")
     */
    private $estimatedDate;

    /**
     * @var float
     * @Groups({"api"})
     * @Expose()
     * @ORM\Column(name="EstimateBenefits", type="float")
     */
    private $estimateBenefits;

    /**
     * @var float
     * @Groups({"api"})
     * @Expose()
     * @ORM\Column(name="Benefits", type="float", nullable=true)
     */
    private $benefits;

    /**
     * @var float
     * @Groups({"api"})
     * @Expose()
     * @ORM\Column(name="WeightEstimate ", type="float", nullable=true)
     */
    private $weightEstimate;

    /**
     * @var float
     * @Groups({"api"})
     * @Expose()
     * @ORM\Column(name="CollectWeight ", type="float", nullable=true)
     */
    private $collectWeight;

    /**
     * @var Parcel
     * @Groups({"api"})
     * @Expose()
     * @ORM\ManyToOne(targetEntity="EntityBundle\Entity\Parcel", inversedBy="parcelRegister", cascade={"persist"})
     */
    private $parcel;

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
     * Set estimateBenefits
     *
     * @param float $estimateBenefits
     *
     * @return ParcelRegister
     */
    public function setEstimateBenefits($estimateBenefits)
    {
        $this->estimateBenefits = $estimateBenefits;

        return $this;
    }

    /**
     * Get estimateBenefits
     *
     * @return float
     */
    public function getEstimateBenefits()
    {
        return $this->estimateBenefits;
    }

    /**
     * Set benefits
     *
     * @param float $benefits
     *
     * @return ParcelRegister
     */
    public function setBenefits($benefits)
    {
        $this->benefits = $benefits;

        return $this;
    }

    /**
     * Get benefits
     *
     * @return float
     */
    public function getBenefits()
    {
        return $this->benefits;
    }

    /**
     * Set weightEstimate
     *
     * @param float $weightEstimate
     *
     * @return ParcelRegister
     */
    public function setWeightEstimate($weightEstimate)
    {
        $this->weightEstimate = $weightEstimate;

        return $this;
    }

    /**
     * Get weightEstimate
     *
     * @return float
     */
    public function getWeightEstimate()
    {
        return $this->weightEstimate;
    }

    /**
     * Set collectWeight
     *
     * @param float $collectWeight
     *
     * @return ParcelRegister
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
     * Set parcel
     *
     * @param \EntityBundle\Entity\Parcel $parcel
     *
     * @return ParcelRegister
     */
    public function setParcel(\EntityBundle\Entity\Parcel $parcel = null)
    {
        $this->parcel = $parcel;

        return $this;
    }

    /**
     * Get parcel
     *
     * @return \EntityBundle\Entity\Parcel
     */
    public function getParcel()
    {
        return $this->parcel;
    }

    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     *
     * @return ParcelRegister
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
     * Set estimatedDate
     *
     * @param string $estimatedDate
     *
     * @return ParcelRegister
     */
    public function setEstimatedDate($estimatedDate)
    {
        $this->estimatedDate = $estimatedDate;

        return $this;
    }

    /**
     * Get estimatedDate
     *
     * @return string
     */
    public function getEstimatedDate()
    {
        return $this->estimatedDate;
    }

    /**
     * Set collectDate
     *
     * @param string $collectDate
     *
     * @return ParcelRegister
     */
    public function setCollectDate($collectDate)
    {
        $this->collectDate = $collectDate;

        return $this;
    }

    /**
     * Get collectDate
     *
     * @return string
     */
    public function getCollectDate()
    {
        return $this->collectDate;
    }
}
