<?php

namespace App\Entity;

use App\Repository\RecipientDocumentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RecipientDocumentRepository::class)
 */
class RecipientDocument
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
    private $idDocument;

    /**
     * @ORM\Column(type="integer")
     */
    private $idRecipient;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateRead;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdRecipient(): ?int
    {
        return $this->idRecipient;
    }

    public function setIdRecipient(int $idRecipient): self
    {
        $this->idRecipient = $idRecipient;

        return $this;
    }

    public function getDateRead(): ?\DateTimeInterface
    {
        return $this->dateRead;
    }

    public function setDateRead(?\DateTimeInterface $dateRead): self
    {
        $this->dateRead = $dateRead;

        return $this;
    }

    public function getIdDocument(): ?int
    {
        return $this->idDocument;
    }

    public function setIdDocument(int $idDocument): self
    {
        $this->idDocument = $idDocument;

        return $this;
    }
}
