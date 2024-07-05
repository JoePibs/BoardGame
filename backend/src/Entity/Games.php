<?php

namespace App\Entity;

use App\Repository\GamesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GamesRepository::class)]
class Games
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $link_philibert = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sku = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $title_long_description = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $long_description = null;

    #[ORM\Column(length: 1500, nullable: true)]
    private ?string $short_description = null;

    #[ORM\Column(nullable: true)]
    private ?float $note = null;

    #[ORM\Column(nullable: true)]
    private ?float $price = null;

    #[ORM\Column(length: 255)]
    private ?string $lang = null;

    #[ORM\Column(nullable: true)]
    private ?int $min_age = null;

    #[ORM\Column(nullable: true)]
    private ?int $min_duration = null;

    #[ORM\Column(nullable: true)]
    private ?int $max_duration = null;

    #[ORM\Column(nullable: true)]
    private ?int $min_players = null;

    #[ORM\Column(nullable: true)]
    private ?int $max_players = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lang_notice = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $universe = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $extension = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $editor = null;

    #[ORM\Column(length: 1000, nullable: true)]
    private ?string $creators = null;

    #[ORM\Column(length: 1000, nullable: true)]
    private ?string $illustrators = null;

    #[ORM\Column(length: 1000, nullable: true)]
    private ?string $video_embed = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $video_link = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $eng_link = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $eng_name = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $eng_long_text = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $eng_short_description = null;

    #[ORM\Column(length: 500, nullable: true)]
    private ?string $themes = null;

    #[ORM\Column(length: 500, nullable: true)]
    private ?string $mechanics = null;

    /**
     * @var Collection<int, RentingGames>
     */
    #[ORM\OneToMany(targetEntity: RentingGames::class, mappedBy: 'game')]
    private Collection $rentingGames;

    public function __construct()
    {
        $this->rentingGames = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getLinkPhilibert(): ?string
    {
        return $this->link_philibert;
    }

    public function setLinkPhilibert(?string $link_philibert): static
    {
        $this->link_philibert = $link_philibert;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getSku(): ?string
    {
        return $this->sku;
    }

    public function setSku(?string $sku): static
    {
        $this->sku = $sku;

        return $this;
    }

    public function getTitleLongDescription(): ?string
    {
        return $this->title_long_description;
    }

    public function setTitleLongDescription(?string $title_long_description): static
    {
        $this->title_long_description = $title_long_description;

        return $this;
    }

    public function getLongDescription(): ?string
    {
        return $this->long_description;
    }

    public function setLongDescription(?string $long_description): static
    {
        $this->long_description = $long_description;

        return $this;
    }

    public function getShortDescription(): ?string
    {
        return $this->short_description;
    }

    public function setShortDescription(?string $short_description): static
    {
        $this->short_description = $short_description;

        return $this;
    }

    public function getNote(): ?float
    {
        return $this->note;
    }

    public function setNote(?float $note): static
    {
        $this->note = $note;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getLang(): ?string
    {
        return $this->lang;
    }

    public function setLang(string $lang): static
    {
        $this->lang = $lang;

        return $this;
    }

    public function getMinAge(): ?int
    {
        return $this->min_age;
    }

    public function setMinAge(?int $min_age): static
    {
        $this->min_age = $min_age;

        return $this;
    }

    public function getMinDuration(): ?int
    {
        return $this->min_duration;
    }

    public function setMinDuration(?int $min_duration): static
    {
        $this->min_duration = $min_duration;

        return $this;
    }

    public function getMaxDuration(): ?int
    {
        return $this->max_duration;
    }

    public function setMaxDuration(?int $max_duration): static
    {
        $this->max_duration = $max_duration;

        return $this;
    }

    public function getMinPlayers(): ?int
    {
        return $this->min_players;
    }

    public function setMinPlayers(?int $min_players): static
    {
        $this->min_players = $min_players;

        return $this;
    }

    public function getMaxPlayers(): ?int
    {
        return $this->max_players;
    }

    public function setMaxPlayers(?int $max_players): static
    {
        $this->max_players = $max_players;

        return $this;
    }

    public function getLangNotice(): ?string
    {
        return $this->lang_notice;
    }

    public function setLangNotice(?string $lang_notice): static
    {
        $this->lang_notice = $lang_notice;

        return $this;
    }

    public function getUniverse(): ?string
    {
        return $this->universe;
    }

    public function setUniverse(?string $universe): static
    {
        $this->universe = $universe;

        return $this;
    }

    public function getExtension(): ?string
    {
        return $this->extension;
    }

    public function setExtension(?string $extension): static
    {
        $this->extension = $extension;

        return $this;
    }

    public function getEditor(): ?string
    {
        return $this->editor;
    }

    public function setEditor(?string $editor): static
    {
        $this->editor = $editor;

        return $this;
    }

    public function getCreators(): ?string
    {
        return $this->creators;
    }

    public function setCreators(?string $creators): static
    {
        $this->creators = $creators;

        return $this;
    }

    public function getIllustrators(): ?string
    {
        return $this->illustrators;
    }

    public function setIllustrators(?string $illustrators): static
    {
        $this->illustrators = $illustrators;

        return $this;
    }

    public function getVideoEmbed(): ?string
    {
        return $this->video_embed;
    }

    public function setVideoEmbed(?string $video_embed): static
    {
        $this->video_embed = $video_embed;

        return $this;
    }

    public function getVideoLink(): ?string
    {
        return $this->video_link;
    }

    public function setVideoLink(?string $video_link): static
    {
        $this->video_link = $video_link;

        return $this;
    }

    public function getEngLink(): ?string
    {
        return $this->eng_link;
    }

    public function setEngLink(?string $eng_link): static
    {
        $this->eng_link = $eng_link;

        return $this;
    }

    public function getEngName(): ?string
    {
        return $this->eng_name;
    }

    public function setEngName(?string $eng_name): static
    {
        $this->eng_name = $eng_name;

        return $this;
    }

    public function getEngLongText(): ?string
    {
        return $this->eng_long_text;
    }

    public function setEngLongText(?string $eng_long_text): static
    {
        $this->eng_long_text = $eng_long_text;

        return $this;
    }

    public function getEngShortDescription(): ?string
    {
        return $this->eng_short_description;
    }

    public function setEngShortDescription(?string $eng_short_description): static
    {
        $this->eng_short_description = $eng_short_description;

        return $this;
    }

    public function getThemes(): ?string
    {
        return $this->themes;
    }

    public function setThemes(?string $themes): static
    {
        $this->themes = $themes;

        return $this;
    }

    public function getMechanics(): ?string
    {
        return $this->mechanics;
    }

    public function setMechanics(?string $mechanics): static
    {
        $this->mechanics = $mechanics;

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
            $rentingGame->setGame($this);
        }

        return $this;
    }

    public function removeRentingGame(RentingGames $rentingGame): static
    {
        if ($this->rentingGames->removeElement($rentingGame)) {
            // set the owning side to null (unless already changed)
            if ($rentingGame->getGame() === $this) {
                $rentingGame->setGame(null);
            }
        }

        return $this;
    }


}
