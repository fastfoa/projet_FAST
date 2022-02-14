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
     * @ORM\Column(type="text")
     */
    private $remarqueMS;

    /**
     * @ORM\Column(type="text")
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
     * @ORM\ManyToOne(targetEntity=Competences::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $competence;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRemarqueMS(): ?string
    {
        return $this->remarqueMS;
    }

    public function setRemarqueMS(string $remarqueMS): self
    {
        $this->remarqueMS = $remarqueMS;

        return $this;
    }

    public function getRemarqueApp(): ?string
    {
        return $this->remarqueApp;
    }

    public function setRemarqueApp(string $remarqueApp): self
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

    public function getCompetence(): ?Competences
    {
        return $this->competence;
    }

    public function setCompetence(?Competences $competence): self
    {
        $this->competence = $competence;

        return $this;
    }
}
