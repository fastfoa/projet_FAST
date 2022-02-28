<?php

namespace App\Entity;

use App\Repository\CompetenceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CompetenceRepository::class)
 */
class Competence
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255 )
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $idFormation;


    public function getId(): ?int
    {
        return $this->id;
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

    public function getRemarqueMA(): ?string
    {
        return $this->remarqueMA;
    }

    public function setRemarqueMA(?string $remarqueMA): self
    {
        $this->remarqueMA = $remarqueMA;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getIdFormation(): ?int
    {
        return $this->idFormation;
    }

    public function setIdFormation(int $idFormation): self
    {
        $this->idFormation = $idFormation;

        return $this;
    }
}
