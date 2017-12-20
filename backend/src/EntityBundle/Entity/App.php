<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * App
 *
 * @ORM\Table(name="app")
 * @ORM\Entity(repositoryClass="EntityBundle\Repository\AppRepository")
 */
class App
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
     * @ORM\OneToOne(targetEntity="EntityBundle\Entity\Users", inversedBy="app", cascade={"persist"})
     */
    private $users;


    /**
     * @var string
     *
     * @ORM\Column(name="deviceId", type="string", length=255, nullable=true)
     */
    private $deviceId;

    /**
     * @var string
     *
     * @ORM\Column(name="tokenId", type="string", length=255, nullable=true)
     */
    private $tokenId;

    /**
     * @var string
     *
     * @ORM\Column(name="platform", type="string", length=255, nullable=true)
     */
    private $platform;

    /**
     * @var string
     *
     * @ORM\Column(name="appVersion", type="string", length=255, nullable=true)
     */
    private $appVersion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @ORM\PreUpdate()
     */
    function update()
    {
        $this->updatedAt = new \DateTime('now');
    }

    /**
     * @ORM\PrePersist()
     */
    function create()
    {
        $this->updatedAt = new \DateTime('now');
    }

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
     * Set deviceId
     *
     * @param string $deviceId
     *
     * @return App
     */
    public function setDeviceId($deviceId)
    {
        $this->deviceId = $deviceId;

        return $this;
    }

    /**
     * Get deviceId
     *
     * @return string
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * Set tokenId
     *
     * @param string $tokenId
     *
     * @return App
     */
    public function setTokenId($tokenId)
    {
        $this->tokenId = $tokenId;

        return $this;
    }

    /**
     * Get tokenId
     *
     * @return string
     */
    public function getTokenId()
    {
        return $this->tokenId;
    }

    /**
     * Set platform
     *
     * @param string $platform
     *
     * @return App
     */
    public function setPlatform($platform)
    {
        $this->platform = $platform;

        return $this;
    }

    /**
     * Get platform
     *
     * @return string
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * Set appVersion
     *
     * @param string $appVersion
     *
     * @return App
     */
    public function setAppVersion($appVersion)
    {
        $this->appVersion = $appVersion;

        return $this;
    }

    /**
     * Get appVersion
     *
     * @return string
     */
    public function getAppVersion()
    {
        return $this->appVersion;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return App
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }


    /**
     * Set user
     *
     * @param \EntityBundle\Entity\Users $users
     *
     * @return App
     */
    public function setUsers(\EntityBundle\Entity\Users $users = null)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get user
     *
     * @return \EntityBundle\Entity\Users
     */
    public function getUsers()
    {
        return $this->users;
    }
}
