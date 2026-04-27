<?php

namespace App\Entity;

use App\Repository\FormeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FormeRepository::class)]
class Forme
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $long = null;

    #[ORM\Column]
    private ?int $large = null;

    #[ORM\Column(length: 255)]
    private ?string $type = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLong(): ?int
    {
        return $this->long;
    }

    public function setLong(int $long): static
    {
        $this->long = $long;

        return $this;
    }

    public function getLarge(): ?int
    {
        return $this->large;
    }

    public function setLarge(int $large): static
    {
        $this->large = $large;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }
public function __construct(string $type, int $long, int $large)
{
    if ($type === 'carree' && $long !== $large) {
        throw new \Exception("La longueur et la largeur doivent être égales pour un carré.");
    }
    $this->type = $type;
    $this->long = $long;
    $this->large = $large;
}
public function Surface(): int
    {
        if($this->type === 'carree') {
            return $this->long * $this->large;
        } elseif($this->type === 'rectangle') {
            return $this->long * $this->large;
        } else {
            throw new \Exception("Type de forme non reconnu.");
        }
        if($this->long!=$this->large) {
           throw new \Exception("La longueur et la largeur doivent être égales pour un carré.");
        }
        
    }
public function Perimetre(): int
    {
        if($this->t=pe === 'carree') {
            return 4 * $this->long;
        } elseif($this->type === 'rectangle') {
            return 2 * ($this->long + $this->large);
        } else {
            throw new \Exception("Type de forme non reconnu.");
        }
    }
}
