<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DoctorantRepository")
 */
class Doctorant
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $CNE;

    /**
     * @ORM\Column(type="date")
     */
    private $DateNaissance;

    /**
     * @ORM\Column(type="string")
     */
    private $LieuNaissance;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Boursier;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $annee_universitaire;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Adresse;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $Telephone;

    /**
     * @ORM\Column(type="string", length=12)
     */
    private $CIN;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nombreHeures;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCNE(): ?string
    {
        return $this->CNE;
    }

    public function setCNE(string $CNE): self
    {
        $this->CNE = $CNE;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->DateNaissance;
    }

    public function setDateNaissance(\DateTimeInterface $DateNaissance): self
    {
        $this->DateNaissance = $DateNaissance;

        return $this;
    }

    public function getLieuNaissance(): ?string
    {
        return $this->LieuNaissance;
    }

    public function setLieuNaissance(string $LieuNaissance): self
    {
        $this->LieuNaissance = $LieuNaissance;

        return $this;
    }


    public function getBoursier(): ?bool
    {
        return $this->Boursier;
    }

    public function setBoursier(?bool $Boursier): self
    {
        $this->Boursier = $Boursier;

        return $this;
    }

    public function getAnneeUniversitaire(): ?string
    {
        return $this->annee_universitaire;
    }

    public function setAnneeUniversitaire(string $annee_universitaire): self
    {
        $this->annee_universitaire = $annee_universitaire;

        return $this;
    }


    public function getAdresse(): ?string
    {
        return $this->Adresse;
    }

    public function setAdresse(?string $Adresse): self
    {
        $this->Adresse = $Adresse;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->Telephone;
    }

    public function setTelephone(string $Telephone): self
    {
        $this->Telephone = $Telephone;

        return $this;
    }

    public function getCIN(): ?string
    {
        return $this->CIN;
    }

    public function setCIN(string $CIN): self
    {
        $this->CIN = $CIN;

        return $this;
    }

    public function getNombreHeures(): ?int
    {
        return $this->nombreHeures;
    }

    public function setNombreHeures(?int $nombreHeures): self
    {
        $this->nombreHeures = $nombreHeures;

        return $this;
    }
}
