<?php

namespace App\Entity;

use App\Repository\UserInSessionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserInSessionRepository::class)
 */
class UserInSession
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
    private $idSession;

    /**
     * @ORM\Column(type="integer")
     */
    private $idUser;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }
}