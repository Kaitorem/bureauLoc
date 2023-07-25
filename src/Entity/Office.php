<?php

namespace App\Entity;

use App\Repository\OfficeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OfficeRepository::class)]
class Office
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $roomSize = null;

    #[ORM\Column]
    private ?int $deskSize = null;

    #[ORM\Column]
    private ?bool $canLeaveBelongings = null;

    #[ORM\Column(length: 20)]
    private ?string $brightness = null;

    #[ORM\Column(length: 50)]
    private ?string $networkQuality = null;

    #[ORM\Column]
    private ?int $capacity = null;

    #[ORM\Column(length: 20)]
    private ?string $internetType = null;

    #[ORM\OneToOne(inversedBy: 'office', cascade: ['persist', 'remove'])]
    private ?Address $location = null;

    #[ORM\ManyToOne(inversedBy: 'offices')]
    private ?User $renter = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRoomSize(): ?int
    {
        return $this->roomSize;
    }

    public function setRoomSize(int $roomSize): self
    {
        $this->roomSize = $roomSize;

        return $this;
    }

    public function getDeskSize(): ?int
    {
        return $this->deskSize;
    }

    public function setDeskSize(int $deskSize): self
    {
        $this->deskSize = $deskSize;

        return $this;
    }

    public function isCanLeaveBelongings(): ?bool
    {
        return $this->canLeaveBelongings;
    }

    public function setCanLeaveBelongings(bool $canLeaveBelongings): self
    {
        $this->canLeaveBelongings = $canLeaveBelongings;

        return $this;
    }

    public function getBrightness(): ?string
    {
        return $this->brightness;
    }

    public function setBrightness(string $brightness): self
    {
        $this->brightness = $brightness;

        return $this;
    }

    public function getNetworkQuality(): ?string
    {
        return $this->networkQuality;
    }

    public function setNetworkQuality(string $networkQuality): self
    {
        $this->networkQuality = $networkQuality;

        return $this;
    }

    public function getCapacity(): ?int
    {
        return $this->capacity;
    }

    public function setCapacity(int $capacity): self
    {
        $this->capacity = $capacity;

        return $this;
    }

    public function getInternetType(): ?string
    {
        return $this->internetType;
    }

    public function setInternetType(string $internetType): self
    {
        $this->internetType = $internetType;

        return $this;
    }

    public function getLocation(): ?Address
    {
        return $this->location;
    }

    public function setLocation(?Address $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getRenter(): ?User
    {
        return $this->renter;
    }

    public function setRenter(?User $renter): self
    {
        $this->renter = $renter;
        return $this;
    }
}
