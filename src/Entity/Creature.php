<?php

namespace App\Entity;

use App\Repository\CreatureRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CreatureRepository::class)]
class Creature
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?int $level = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $decription = null;

    #[ORM\Column]
    private ?int $health = null;

    #[ORM\Column]
    private ?int $armor = null;

    #[ORM\Column]
    private ?int $min_dmg = null;

    #[ORM\Column]
    private ?int $max_dmg = null;

    #[ORM\Column(type: 'datetime')]
    private $dateAdded;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $date_last_updated;
   
    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(int $level): static
    {
        $this->level = $level;

        return $this;
    }

    public function getDecription(): ?string
    {
        return $this->decription;
    }

    public function setDecription(?string $decription): static
    {
        $this->decription = $decription;

        return $this;
    }

    public function getHealth(): ?int
    {
        return $this->health;
    }

    public function setHealth(int $health): static
    {
        $this->health = $health;

        return $this;
    }

    public function getArmor(): ?int
    {
        return $this->armor;
    }

    public function setArmor(int $armor): static
    {
        $this->armor = $armor;

        return $this;
    }

    public function getMinDmg(): ?int
    {
        return $this->min_dmg;
    }

    public function setMinDmg(int $min_dmg): static
    {
        $this->min_dmg = $min_dmg;

        return $this;
    }

    public function getMaxDmg(): ?int
    {
        return $this->max_dmg;
    }

    public function setMaxDmg(int $max_dmg): static
    {
        $this->max_dmg = $max_dmg;

        return $this;
    }

    public function getDateAdded(): ?\DateTimeInterface
    {
        return $this->dateAdded;
    }

    public function setDateAdded(\DateTimeInterface $dateAdded): self
    {
        $this->dateAdded = $dateAdded;
        return $this;
    }

    public function getDateLastUpdated(): ?\DateTimeInterface
    {
        return $this->date_last_updated;
    }

    public function setDateLastUpdated(?\DateTimeInterface $date_last_updated): static
    {
        $this->date_last_updated = $date_last_updated;

        return $this;
    }
}
