<?php

namespace App\Entity;

use App\Repository\DocumentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DocumentRepository::class)
 */
class Document
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
    private $IdOwner;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fileName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateCreate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fileNameOriginal;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $OFormation;

    /**
     * @ORM\Column(type="boolean", options={"default" : "0"}, nullable=true)
     */
    private $MA;

    /**
     * @ORM\Column(type="boolean", options={"default" : "0"}, nullable=true)
     */
    private $formateur;

    /**
     * @ORM\Column(type="boolean", options={"default" : "0"}, nullable=true)
     */
    private $Entreprise;

    /**
     * @ORM\Column(type="boolean", options={"default" : "0"}, nullable=true)
     */
    private $Apprenti;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    public function setFileName(string $fileName): self
    {
        $this->fileName = $fileName;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDateCreate(): ?\DateTimeInterface
    {
        return $this->dateCreate;
    }

    public function setDateCreate(\DateTimeInterface $dateCreate): self
    {
        
        $this->dateCreate = $dateCreate;

        return $this;
    }

    public function getFileNameOriginal(): ?string
    {
        return $this->fileNameOriginal;
    }

    public function setFileNameOriginal(string $fileNameOriginal): self
    {
        $this->fileNameOriginal = $fileNameOriginal;

        return $this;
    }

    public function getIdOwner(): ?int
    {
        return $this->IdOwner;
    }

    public function setIdOwner(int $IdOwner): self
    {
        $this->IdOwner = $IdOwner;

        return $this;
    }


    public function getMA(): ?bool
    {
        return $this->MA;
    }

    public function setMA(?bool $MA): self
    {
        $this->MA = $MA;

        return $this;
    }

    public function getFormateur(): ?bool
    {
        return $this->formateur;
    }

    public function setFormateur(?bool $formateur): self
    {
        $this->formateur = $formateur;

        return $this;
    }

    public function getEntreprise(): ?bool
    {
        return $this->Entreprise;
    }

    public function setEntreprise(?bool $Entreprise): self
    {
        $this->Entreprise = $Entreprise;

        return $this;
    }

    public function getApprenti(): ?bool
    {
        return $this->Apprenti;
    }

    public function setApprenti(?bool $Apprenti): self
    {
        $this->Apprenti = $Apprenti;

        return $this;
    }

    public function getOFormation(): ?bool
    {
        return $this->OFormation;
    }

    public function setOFormation(?bool $OFormation): self
    {
        $this->OFormation = $OFormation;

        return $this;
    }
}
