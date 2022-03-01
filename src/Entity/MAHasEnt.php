<?php

namespace App\Entity;

use App\Repository\MAHasEntRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MAHasEntRepository::class)
 */
class MAHasEnt
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $idMA;

    /**
     * @ORM\Column(type="integer")
     */
    private $idENT;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIdENT(): ?int
    {
        return $this->idENT;
    }

    public function setIdENT(int $idENT): self
    {
        $this->idENT = $idENT;

        return $this;
    }
}
