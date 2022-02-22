<?php

namespace App\Entity;

use App\Repository\EvaluationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EvaluationRepository::class)
 */
class Evaluation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $remarqueMA;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $remarqueApp;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $remarqueOF;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $note;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */

     private $competenceID;

     /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $appID;
 
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $MAID;
   
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $formateurID;
    
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $sessionID;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRemarqueMA(): ?string
    {
        return $this->remarqueMA;
    }

    public function setRemarqueMA(?string $remarqueMA): self
    {
        $this->remarqueMA = $remarqueMA;

        return $this;
    }

    public function getRemarqueApp(): ?string
    {
        return $this->remarqueApp;
    }

    public function setRemarqueApp(?string $remarqueApp): self
    {
        $this->remarqueApp = $remarqueApp;

        return $this;
    }

    public function getRemarqueOF(): ?string
    {
        return $this->remarqueOF;
    }

    public function setRemarqueOF(?string $remarqueOF): self
    {
        $this->remarqueOF = $remarqueOF;

        return $this;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(?int $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getCompetenceID(): ?int
    {
        return $this->competenceID;
    }

    public function setCompetenceID(?int $competenceID): self
    {
        $this->competenceID = $competenceID;

        return $this;
    }

    public function getAppID(): ?int
    {
        return $this->appID;
    }

    public function setAppID(?int $appID): self
    {
        $this->appID = $appID;

        return $this;
    }

    public function getMAID(): ?int
    {
        return $this->MAID;
    }

    public function setMAID(?int $MAID): self
    {
        $this->MAID = $MAID;

        return $this;
    }

    public function getFormateurID(): ?int
    {
        return $this->formateurID;
    }

    public function setFormateurID(?int $formateurID): self
    {
        $this->formateurID = $formateurID;

        return $this;
    }

    public function getSessionID(): ?int
    {
        return $this->sessionID;
    }

    public function setSessionID(?int $sessionID): self
    {
        $this->sessionID = $sessionID;

        return $this;
    }
}
