<?php

namespace App\Entity;

use App\Repository\FactorielRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FactorielRepository::class)]
class Factoriel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $nombre = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?int
    {
        return $this->nombre;
    }

    public function setNombre(int $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }
    public function calculFactoriel() : int 
    {
        $nbr = $this->getNombre();
    if($nbr < 0)
        throw new \InvalidArgumentException("le nombre doit etre un entier positif");
    if($nbr == 0)
        return 1;
    else {
        $f = 1;
        for($i = 2; $i <= $nbr; $i++) {
            $f *= $i;
        }
        return $f;
    }


}
}