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
     private $remarqueAPP;

     /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $remarqueMA;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $remarqueFormateur;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $remarqueOF;


    /**
     * @ORM\Column(type="integer")
     */
    private $idApp;

   /**
     * @ORM\Column(type="integer")
     */
    private $idMA;

   /**
     * @ORM\Column(type="integer")
     */
    private $idFormateur;

   /**
     * @ORM\Column(type="integer")
     */
    private $idSession;

   /**
     * @ORM\Column(type="integer")
     */
    private $idCompetence;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateApp;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateMA;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateFormateur;

        /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateOF;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRemarqueAPP(): ?string
    {
        return $this->remarqueAPP;
    }

    public function setRemarqueAPP(?string $remarqueAPP): self
    {
        $this->remarqueAPP = $remarqueAPP;

        return $this;
    }

    public function getIdApp(): ?int
    {
        return $this->idApp;
    }

    public function setIdApp(int $idApp): self
    {
        $this->idApp = $idApp;

        return $this;
    }

    public function getDateApp(): ?\DateTimeInterface
    {
        return $this->dateApp;
    }

    public function setDateApp(?\DateTimeInterface $dateApp): self
    {
        $this->dateApp = $dateApp;

        return $this;
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

    public function getRemarqueFormateur(): ?string
    {
        return $this->remarqueFormateur;
    }

    public function setRemarqueFormateur(?string $remarqueFormateur): self
    {
        $this->remarqueFormateur = $remarqueFormateur;

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

    public function getIdMA(): ?int
    {
        return $this->idMA;
    }

    public function setIdMA(int $idMA): self
    {
        $this->idMA = $idMA;

        return $this;
    }

    public function getIdFormateur(): ?int
    {
        return $this->idFormateur;
    }

    public function setIdFormateur(int $idFormateur): self
    {
        $this->idFormateur = $idFormateur;

        return $this;
    }

    public function getIdSession(): ?int
    {
        return $this->idSession;
    }

    public function setIdSession(int $idSession): self
    {
        $this->idSession = $idSession;

        return $this;
    }

    public function getIdCompetence(): ?int
    {
        return $this->idCompetence;
    }

    public function setIdCompetence(int $idCompetence): self
    {
        $this->idCompetence = $idCompetence;

        return $this;
    }

    public function getDateMA(): ?\DateTimeInterface
    {
        return $this->dateMA;
    }

    public function setDateMA(?\DateTimeInterface $dateMA): self
    {
        $this->dateMA = $dateMA;

        return $this;
    }

    public function getDateFormateur(): ?\DateTimeInterface
    {
        return $this->dateFormateur;
    }

    public function setDateFormateur(?\DateTimeInterface $dateFormateur): self
    {
        $this->dateFormateur = $dateFormateur;

        return $this;
    }

    public function getDateOF(): ?\DateTimeInterface
    {
        return $this->dateOF;
    }

    public function setDateOF(?\DateTimeInterface $dateOF): self
    {
        $this->dateOF = $dateOF;

        return $this;
    }
}
