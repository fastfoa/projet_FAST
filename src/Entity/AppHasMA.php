<?php

namespace App\Entity;

use App\Repository\AppHasMARepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AppHasMARepository::class)
 */
class AppHasMA
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
    private $idApprenti;

    /**
     * @ORM\Column(type="integer")
     */
    private $idMA;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdApprenti(): ?int
    {
        return $this->idApprenti;
    }

    public function setIdApprenti(int $idApprenti): self
    {
        $this->idApprenti = $idApprenti;

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
}
