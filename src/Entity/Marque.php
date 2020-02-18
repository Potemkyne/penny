<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MarqueRepository")
 */
class Marque
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
    private $domaine;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $logo;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Parfum", mappedBy="marquefk")
     */
    private $parfums;

    public function __construct()
    {
        $this->parfums = new ArrayCollection();
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

    public function getDomaine(): ?string
    {
        return $this->domaine;
    }

    public function setDomaine(string $domaine): self
    {
        $this->domaine = $domaine;

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

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * @return Collection|Parfum[]
     */
    public function getParfums(): Collection
    {
        return $this->parfums;
    }

    public function addParfum(Parfum $parfum): self
    {
        if (!$this->parfums->contains($parfum)) {
            $this->parfums[] = $parfum;
            $parfum->setMarquefk($this);
        }

        return $this;
    }

    public function removeParfum(Parfum $parfum): self
    {
        if ($this->parfums->contains($parfum)) {
            $this->parfums->removeElement($parfum);
            // set the owning side to null (unless already changed)
            if ($parfum->getMarquefk() === $this) {
                $parfum->setMarquefk(null);
            }
        }

        return $this;
    }
}
