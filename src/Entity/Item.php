<?php

namespace App\Entity;

use App\Repository\ItemRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ItemRepository::class)]
class Item
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(type: 'datetime')]
    private $date_added;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $date_last_updated;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(nullable: true)]
    private ?int $item_level = null;

    #[ORM\Column(nullable: true)]
    private ?int $stat_min_dmg = null;

    #[ORM\Column(nullable: true)]
    private ?int $stat_max_dmg = null;

    #[ORM\Column(nullable: true)]
    private ?int $stat_armor = null;

    #[ORM\Column(nullable: true)]
    private ?int $stat_health = null;

    #[ORM\Column(nullable: true)]
    private ?int $slot = null;

    #[ORM\Column(nullable: true)]
    private ?int $type = null;

    #[ORM\Column(nullable: true)]
    private ?int $set_item = null;

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

    public function getDateAdded(): ?\DateTimeInterface
    {
        return $this->date_added;
    }

    public function setDateAdded(\DateTimeInterface $date_added): static
    {
        $this->date_added = $date_added;

        return $this;
    }

    public function getDateLastUpdated(): ?\DateTimeInterface
    {
        return $this->date_last_updated;
    }

    public function setDateLastUpdated(\DateTimeInterface $date_last_updated): static
    {
        $this->date_last_updated = $date_last_updated;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getItemLevel(): ?int
    {
        return $this->item_level;
    }

    public function setItemLevel(?int $item_level): self
    {
        $this->item_level = $item_level;

        return $this;
    }


    public function getStatMinDmg(): ?int
    {
        return $this->stat_min_dmg;
    }

    public function setStatMinDmg(int $stat_min_dmg): static
    {
        $this->stat_min_dmg = $stat_min_dmg;

        return $this;
    }

    public function getStatMaxDmg(): ?int
    {
        return $this->stat_max_dmg;
    }

    public function setStatMaxDmg(int $stat_max_dmg): static
    {
        $this->stat_max_dmg = $stat_max_dmg;

        return $this;
    }

    public function getStatArmor(): ?int
    {
        return $this->stat_armor;
    }

    public function setStatArmor(int $stat_armor): static
    {
        $this->stat_armor = $stat_armor;

        return $this;
    }

    public function getStatHealth(): ?int
    {
        return $this->stat_health;
    }

    public function setStatHealth(int $stat_health): static
    {
        $this->stat_health = $stat_health;

        return $this;
    }

    public function getSlot(): ?int
    {
        return $this->slot;
    }

    public function setSlot(int $slot): static
    {
        $this->slot = $slot;

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(int $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getSetItem(): ?int
    {
        return $this->set_item;
    }

public function setSetItem(?int $set_item): self
{
    $this->set_item = $set_item;

    return $this;
}

}
