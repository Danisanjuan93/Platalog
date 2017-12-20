<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Groups;

/**
 * Note
 *
 * @ORM\Table(name="note")
 * @ORM\Entity(repositoryClass="EntityBundle\Repository\NoteRepository")
 */
class Note
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @Groups({"api"})
     * @Expose()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Finca
     * @ORM\ManyToOne(targetEntity="EntityBundle\Entity\Finca", inversedBy="note", cascade={"persist"})
     * @Groups({"api"})
     * @Expose()
     */
    private $finca;

    /**
     * @var string
     *
     * @Groups({"api"})
     * @Expose()
     * @ORM\Column(name="noteText", type="string", length=255)
     */
    private $noteText;

    /**
     * @var string
     *
     * @Groups({"api"})
     * @Expose()
     * @ORM\Column(name="noteTittle", type="string", length=255)
     */
    private $noteTittle;

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
     * Set noteText
     *
     * @param string $noteText
     *
     * @return Note
     */
    public function setNoteText($noteText)
    {
        $this->noteText = $noteText;

        return $this;
    }

    /**
     * Get noteText
     *
     * @return string
     */
    public function getNoteText()
    {
        return $this->noteText;
    }

    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     *
     * @return Note
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
     * Set noteTittle
     *
     * @param string $noteTittle
     *
     * @return Note
     */
    public function setNoteTittle($noteTittle)
    {
        $this->noteTittle = $noteTittle;
    
        return $this;
    }

    /**
     * Get noteTittle
     *
     * @return string
     */
    public function getNoteTittle()
    {
        return $this->noteTittle;
    }


    /**
     * Set finca
     *
     * @param \EntityBundle\Entity\Finca $finca
     *
     * @return Note
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
