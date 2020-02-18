<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ParfumRepository")
 */
class Parfum
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $annee;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sexe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $concentration;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\FamilleOlfactive", inversedBy="parfums")
     * @ORM\JoinColumn(nullable=false)
     */
    private $famillefk;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Marque", inversedBy="parfums")
     * @ORM\JoinColumn(nullable=false)
     */
    private $marquefk;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\NoteTete", inversedBy="parfums")
     */
    private $tetefk;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\NoteCoeur", inversedBy="parfums")
     */
    private $coeurfk;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\NoteFond", inversedBy="parfums")
     */
    private $fondfk;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Nez", inversedBy="parfums")
     */
    private $nezfk;

    public function __construct()
    {
        $this->tetefk = new ArrayCollection();
        $this->coeurfk = new ArrayCollection();
        $this->fondfk = new ArrayCollection();
        $this->nezfk = new ArrayCollection();
    }



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAnnee(): ?string
    {
        return $this->annee;
    }

    public function setAnnee(string $annee): self
    {
        $this->annee = $annee;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getConcentration(): ?string
    {
        return $this->concentration;
    }

    public function setConcentration(string $concentration): self
    {
        $this->concentration = $concentration;

        return $this;
    }

    public function getFamillefk(): ?FamilleOlfactive
    {
        return $this->famillefk;
    }

    public function setFamillefk(?FamilleOlfactive $famillefk): self
    {
        $this->famillefk = $famillefk;

        return $this;
    }

    public function getMarquefk(): ?Marque
    {
        return $this->marquefk;
    }

    public function setMarquefk(?Marque $marquefk): self
    {
        $this->marquefk = $marquefk;

        return $this;
    }

    /**
     * @return Collection|NoteTete[]
     */
    public function getTetefk(): Collection
    {
        return $this->tetefk;
    }

    public function addTetefk(NoteTete $tetefk): self
    {
        if (!$this->tetefk->contains($tetefk)) {
            $this->tetefk[] = $tetefk;
        }

        return $this;
    }

    public function removeTetefk(NoteTete $tetefk): self
    {
        if ($this->tetefk->contains($tetefk)) {
            $this->tetefk->removeElement($tetefk);
        }

        return $this;
    }

    /**
     * @return Collection|NoteCoeur[]
     */
    public function getCoeurfk(): Collection
    {
        return $this->coeurfk;
    }

    public function addCoeurfk(NoteCoeur $coeurfk): self
    {
        if (!$this->coeurfk->contains($coeurfk)) {
            $this->coeurfk[] = $coeurfk;
        }

        return $this;
    }

    public function removeCoeurfk(NoteCoeur $coeurfk): self
    {
        if ($this->coeurfk->contains($coeurfk)) {
            $this->coeurfk->removeElement($coeurfk);
        }

        return $this;
    }

    /**
     * @return Collection|NoteFond[]
     */
    public function getFondfk(): Collection
    {
        return $this->fondfk;
    }

    public function addFondfk(NoteFond $fondfk): self
    {
        if (!$this->fondfk->contains($fondfk)) {
            $this->fondfk[] = $fondfk;
        }

        return $this;
    }

    public function removeFondfk(NoteFond $fondfk): self
    {
        if ($this->fondfk->contains($fondfk)) {
            $this->fondfk->removeElement($fondfk);
        }

        return $this;
    }

    /**
     * @return Collection|Nez[]
     */
    public function getNezfk(): Collection
    {
        return $this->nezfk;
    }

    public function addNezfk(Nez $nezfk): self
    {
        if (!$this->nezfk->contains($nezfk)) {
            $this->nezfk[] = $nezfk;
        }

        return $this;
    }

    public function removeNezfk(Nez $nezfk): self
    {
        if ($this->nezfk->contains($nezfk)) {
            $this->nezfk->removeElement($nezfk);
        }

        return $this;
    }

}
