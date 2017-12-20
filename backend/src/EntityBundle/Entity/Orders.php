<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Groups;
/**
 * Orders
 *
 * @ORM\Table(name="orders")
 * @ORM\Entity(repositoryClass="EntityBundle\Repository\OrdersRepository")
 */
class Orders
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
     * @var Finca
     * @Groups({"api"})
     * @Expose()
     * @ORM\ManyToOne(targetEntity="EntityBundle\Entity\Finca", inversedBy="orders", cascade={"persist"})
     */

    private $finca;

    /**
     * @var \Date
     * @Groups({"api"})
     * @Expose()
     * @ORM\Column(name="deletedAt", type="date", nullable=true)
     */
    private $deletedAt;

    /**
     * @var int
     * @Groups({"api"})
     * @Expose()
     * @ORM\Column(name="weight", type="integer")
     */
    private $weight;

    /**
     * @var int
     * @Groups({"api"})
     * @Expose()
     * @ORM\Column(name="benefits", type="integer", nullable=true)
     */
    private $benefits;

    /**
     * @var string
     * @Groups({"api"})
     * @Expose()
     * @ORM\Column(name="receiver", type="string", length=255)
     */
    private $receiver;

    /**
     * @var string
     * @Groups({"api"})
     * @Expose()
     * @ORM\Column(name="state", type="string", length=255)
     */
    private $state;


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
     * Set weight
     *
     * @param integer $weight
     *
     * @return Orders
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set receiver
     *
     * @param string $receiver
     *
     * @return Orders
     */
    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;

        return $this;
    }

    /**
     * Get receiver
     *
     * @return string
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * Set state
     *
     * @param string $state
     *
     * @return Orders
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set finca
     *
     * @param \EntityBundle\Entity\Finca $finca
     *
     * @return Orders
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
     * Set benefits
     *
     * @param integer $benefits
     *
     * @return Orders
     */
    public function setBenefits($benefits)
    {
        $this->benefits = $benefits;

        return $this;
    }

    /**
     * Get benefits
     *
     * @return integer
     */
    public function getBenefits()
    {
        return $this->benefits;
    }

    /**
     * Set deletedAt
     *
     * @param \Date $deletedAt
     *
     * @return Orders
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Get deletedAt
     *
     * @return \Date
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }
}
