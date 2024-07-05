<?php

namespace App\Entity;

use App\Repository\RentingGamesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RentingGamesRepository::class)]
class RentingGames
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'rentingGames')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Games $game = null;

    #[ORM\ManyToOne(inversedBy: 'rentingGames')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Users $owner = null;

    #[ORM\Column(length: 255)]
    private ?float $renting_day_price = null;

    #[ORM\Column(nullable: true)]
    private ?float $renting_week_price = null;

    #[ORM\Column(nullable: true)]
    private ?float $buy_price = null;

    #[ORM\Column]
    private ?float $caution_price = null;

    #[ORM\Column]
    private ?bool $isRented = null;

    /**
     * @var Collection<int, Rents>
     */
    #[ORM\OneToMany(targetEntity: Rents::class, mappedBy: 'renting_game')]
    private Collection $renter;

    public function __construct()
    {
        $this->renter = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGame(): ?Games
    {
        return $this->game;
    }

    public function setGame(?Games $game): static
    {
        $this->game = $game;

        return $this;
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

    public function getRentingDayPrice(): ?float
    {
        return $this->renting_day_price;
    }

    public function setRentingDayPrice(?float $renting_day_price): static
    {
        $this->renting_day_price = $renting_day_price;

        return $this;
    }

    public function getRentingWeekPrice(): ?float
    {
        return $this->renting_week_price;
    }

    public function setRentingWeekPrice(?float $renting_week_price): static
    {
        $this->renting_week_price = $renting_week_price;

        return $this;
    }

    public function getBuyPrice(): ?float
    {
        return $this->buy_price;
    }

    public function setBuyPrice(?float $buy_price): static
    {
        $this->buy_price = $buy_price;

        return $this;
    }

    public function getCautionPrice(): ?float
    {
        return $this->caution_price;
    }

    public function setCautionPrice(float $caution_price): static
    {
        $this->caution_price = $caution_price;

        return $this;
    }

    public function isRented(): ?bool
    {
        return $this->isRented;
    }

    public function setRented(bool $isRented): static
    {
        $this->isRented = $isRented;

        return $this;
    }

    /**
     * @return Collection<int, Rents>
     */
    public function getRenter(): Collection
    {
        return $this->renter;
    }

    public function addRenter(Rents $renter): static
    {
        if (!$this->renter->contains($renter)) {
            $this->renter->add($renter);
            $renter->setRentingGame($this);
        }

        return $this;
    }

    public function removeRenter(Rents $renter): static
    {
        if ($this->renter->removeElement($renter)) {
            // set the owning side to null (unless already changed)
            if ($renter->getRentingGame() === $this) {
                $renter->setRentingGame(null);
            }
        }

        return $this;
    }
}
