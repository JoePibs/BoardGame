<?php

namespace App\Entity;

use App\Repository\RentsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RentsRepository::class)]
class Rents
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'rents')]
    private ?Users $owner = null;

    #[ORM\ManyToOne(inversedBy: 'renter')]
    private ?RentingGames $renting_game = null;

    #[ORM\ManyToOne(inversedBy: 'rents')]
    private ?Users $renter = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $begin_date = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $previsionnal_return_date = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $real_return_date = null;

    #[ORM\Column]
    private ?float $price = null;

    #[ORM\Column(nullable: true)]
    private ?float $penalties_late_amount = null;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOwner(): ?Users
    {
        return $this->owner;
    }

    public function setOwner(?Users $owner): static
    {
        $this->owner = $owner;

        return $this;
    }

    public function getRentingGame(): ?RentingGames
    {
        return $this->renting_game;
    }

    public function setRentingGame(?RentingGames $renting_game): static
    {
        $this->renting_game = $renting_game;

        return $this;
    }

    public function getRenter(): ?Users
    {
        return $this->renter;
    }

    public function setRenter(?Users $renter): static
    {
        $this->renter = $renter;

        return $this;
    }

    public function getBeginDate(): ?\DateTimeInterface
    {
        return $this->begin_date;
    }

    public function setBeginDate(?\DateTimeInterface $begin_date): static
    {
        $this->begin_date = $begin_date;

        return $this;
    }

    public function getPrevisionnalReturnDate(): ?\DateTimeInterface
    {
        return $this->previsionnal_return_date;
    }

    public function setPrevisionnalReturnDate(?\DateTimeInterface $previsionnal_return_date): static
    {
        $this->previsionnal_return_date = $previsionnal_return_date;

        return $this;
    }

    public function getRealReturnDate(): ?\DateTimeInterface
    {
        return $this->real_return_date;
    }

    public function setRealReturnDate(?\DateTimeInterface $real_return_date): static
    {
        $this->real_return_date = $real_return_date;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getPenaltiesLateAmount(): ?float
    {
        return $this->penalties_late_amount;
    }

    public function setPenaltiesLateAmount(?float $penalties_late_amount): static
    {
        $this->penalties_late_amount = $penalties_late_amount;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }
}
