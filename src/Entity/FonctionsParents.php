<?php

namespace App\Entity;

use App\Repository\FonctionsParentsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FonctionsParentsRepository::class)
 */
class FonctionsParents
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity=Parentsdelegues::class, mappedBy="fonction")
     */
    private $parentsdelegues;

    public function __construct()
    {
        $this->parentsdelegues = new ArrayCollection();
    }

    public function __toString() 
    {
        return $this->getName();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * @return Collection|Parentsdelegues[]
     */
    public function getParentsdelegues(): Collection
    {
        return $this->parentsdelegues;
    }

    public function addParentsdelegue(Parentsdelegues $parentsdelegue): self
    {
        if (!$this->parentsdelegues->contains($parentsdelegue)) {
            $this->parentsdelegues[] = $parentsdelegue;
            $parentsdelegue->setFonction($this);
        }

        return $this;
    }

    public function removeParentsdelegue(Parentsdelegues $parentsdelegue): self
    {
        if ($this->parentsdelegues->removeElement($parentsdelegue)) {
            // set the owning side to null (unless already changed)
            if ($parentsdelegue->getFonction() === $this) {
                $parentsdelegue->setFonction(null);
            }
        }

        return $this;
    }
}
