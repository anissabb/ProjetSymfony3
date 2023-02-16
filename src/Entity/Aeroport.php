<?php

namespace App\Entity;

use App\Repository\AeroportRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AeroportRepository::class)]
class Aeroport
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nom = null;
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $code = null;

    #[ORM\OneToMany(mappedBy: 'aeroportDepart', targetEntity: Vol::class)]
    private Collection $volsDepart;

    
    public function __construct(array $vals = []){
        $this->hydrate($vals);
       
         $this->volsDepart = new ArrayCollection();
        }
    
         public function hydrate (array $vals = []){
            foreach ($vals as $key=> $val){
                $method = "set" . ucfirst($key);
                 if (method_exists($this,$method)){$this->$method ($val); }} }
    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }
    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return Collection<int, Vol>
     */
    public function getVolDepart(): Collection
    {
        return $this->volsDepart;
    }

    public function addVolDepart(Vol $volsDepart): self
    {
        if (!$this->volsDepart->contains($volsDepart)) {
            $this->volsDepart->add($volsDepart);
            $volsDepart->setAeroportDepart($this);
        }

        return $this;
    }

    public function removeVolDepart(Vol $volsDepart): self
    {
        if ($this->volsDepart->removeElement($volsDepart)) {
            // set the owning side to null (unless already changed)
            if ($volsDepart->getAeroportDepart() === $this) {
                $volsDepart->setAeroportDepart(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Vol>
     */
    public function getVolsDepart(): Collection
    {
        return $this->volsDepart;
    }

    public function addVolsDepart(Vol $volsDepart): self
    {
        if (!$this->volsDepart->contains($volsDepart)) {
            $this->volsDepart->add($volsDepart);
            $volsDepart->setAeroportDepart($this);
        }

        return $this;
    }

    public function removeVolsDepart(Vol $volsDepart): self
    {
        if ($this->volsDepart->removeElement($volsDepart)) {
            // set the owning side to null (unless already changed)
            if ($volsDepart->getAeroportDepart() === $this) {
                $volsDepart->setAeroportDepart(null);
            }
        }

        return $this;
    }
}
