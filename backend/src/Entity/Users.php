<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UsersRepository::class)]
class Users
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $firstname = null;

    #[ORM\Column(length: 255)]
    private ?string $lastname = null;

    #[ORM\Column(length: 100)]
    private ?string $pseudo = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $street = null;

    #[ORM\Column(length: 15, nullable: true)]
    private ?string $zipcode = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $city = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $avatar = null;

    #[ORM\Column(length: 255)]
    private ?string $role = null;

    #[ORM\Column(length: 1500, nullable: true)]
    private ?string $bio = null;

    #[ORM\Column]
    private ?bool $isLogged = null;

    /**
     * @var Collection<int, RentingGames>
     */
    #[ORM\OneToMany(targetEntity: RentingGames::class, mappedBy: 'owner')]
    private Collection $rentingGames;

    /**
     * @var Collection<int, Rents>
     */
    #[ORM\OneToMany(targetEntity: Rents::class, mappedBy: 'owner')]
    private Collection $rents;

    public function __construct()
    {
        $this->rentingGames = new ArrayCollection();
        $this->rents = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): static
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): static
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): static
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street): static
    {
        $this->street = $street;

        return $this;
    }

    public function getZipcode(): ?string
    {
        return $this->zipcode;
    }

    public function setZipcode(?string $zipcode): static
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): static
    {
        $this->city = $city;

        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(?string $avatar): static
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): static
    {
        $this->role = $role;

        return $this;
    }

    public function getBio(): ?string
    {
        return $this->bio;
    }

    public function setBio(?string $bio): static
    {
        $this->bio = $bio;

        return $this;
    }

    public function isLogged(): ?bool
    {
        return $this->isLogged;
    }

    public function setLogged(bool $isLogged): static
    {
        $this->isLogged = $isLogged;

        return $this;
    }

    /**
     * @return Collection<int, RentingGames>
     */
    public function getRentingGames(): Collection
    {
        return $this->rentingGames;
    }

    public function addRentingGame(RentingGames $rentingGame): static
    {
        if (!$this->rentingGames->contains($rentingGame)) {
            $this->rentingGames->add($rentingGame);
            $rentingGame->setOwner($this);
        }

        return $this;
    }

    public function removeRentingGame(RentingGames $rentingGame): static
    {
        if ($this->rentingGames->removeElement($rentingGame)) {
            // set the owning side to null (unless already changed)
            if ($rentingGame->getOwner() === $this) {
                $rentingGame->setOwner(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Rents>
     */
    public function getRents(): Collection
    {
        return $this->rents;
    }

    public function addRent(Rents $rent): static
    {
        if (!$this->rents->contains($rent)) {
            $this->rents->add($rent);
            $rent->setOwner($this);
        }

        return $this;
    }

    public function removeRent(Rents $rent): static
    {
        if ($this->rents->removeElement($rent)) {
            // set the owning side to null (unless already changed)
            if ($rent->getOwner() === $this) {
                $rent->setOwner(null);
            }
        }

        return $this;
    }
}
