<?php

namespace Caas23\Entity;

use Caas23\Repository\EnergySupplyRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @SuppressWarnings(PHPMD)(ExcessivePublicCount, TooManyFields, ExcessiveClassComplexity)
 */
#[ORM\Entity(repositoryClass: EnergySupplyRepository::class)]
class EnergySupply
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $bf72 = null;

    #[ORM\Column]
    private ?float $gas72 = null;

    #[ORM\Column]
    private ?float $water72 = null;

    #[ORM\Column]
    private ?float $wind72 = null;

    #[ORM\Column]
    private ?float $sun72 = null;

    #[ORM\Column]
    private ?float $total72 = null;

    #[ORM\Column]
    private ?float $bf82 = null;

    #[ORM\Column]
    private ?float $gas82 = null;

    #[ORM\Column]
    private ?float $water82 = null;

    #[ORM\Column]
    private ?float $wind82 = null;

    #[ORM\Column]
    private ?float $sun82 = null;

    #[ORM\Column]
    private ?float $total82 = null;

    #[ORM\Column]
    private ?float $bf92 = null;

    #[ORM\Column]
    private ?float $gas92 = null;

    #[ORM\Column]
    private ?float $water92 = null;

    #[ORM\Column]
    private ?float $wind92 = null;

    #[ORM\Column]
    private ?float $sun92 = null;

    #[ORM\Column]
    private ?float $total92 = null;

    #[ORM\Column]
    private ?float $bf02 = null;

    #[ORM\Column]
    private ?float $gas02 = null;

    #[ORM\Column]
    private ?float $water02 = null;

    #[ORM\Column]
    private ?float $wind02 = null;

    #[ORM\Column]
    private ?float $sun02 = null;

    #[ORM\Column]
    private ?float $total02 = null;

    #[ORM\Column]
    private ?float $bf12 = null;

    #[ORM\Column]
    private ?float $gas12 = null;

    #[ORM\Column]
    private ?float $water12 = null;

    #[ORM\Column]
    private ?float $wind12 = null;

    #[ORM\Column]
    private ?float $sun12 = null;

    #[ORM\Column]
    private ?float $total12 = null;

    #[ORM\Column]
    private ?float $bf22 = null;

    #[ORM\Column]
    private ?float $gas22 = null;

    #[ORM\Column]
    private ?float $water22 = null;

    #[ORM\Column]
    private ?float $wind22 = null;

    #[ORM\Column]
    private ?float $sun22 = null;

    #[ORM\Column]
    private ?float $total22 = null;

    public function getId(): ?float
    {
        return $this->id;
    }

    public function getBf72(): ?float
    {
        return $this->bf72;
    }

    public function setBf72(float $bf72): static
    {
        $this->bf72 = $bf72;

        return $this;
    }

    public function getGas72(): ?float
    {
        return $this->gas72;
    }

    public function setGas72(float $gas72): static
    {
        $this->gas72 = $gas72;

        return $this;
    }

    public function getWater72(): ?float
    {
        return $this->water72;
    }

    public function setWater72(float $water72): static
    {
        $this->water72 = $water72;

        return $this;
    }

    public function getWind72(): ?float
    {
        return $this->wind72;
    }

    public function setWind72(float $wind72): static
    {
        $this->wind72 = $wind72;

        return $this;
    }

    public function getSun72(): ?float
    {
        return $this->sun72;
    }

    public function setSun72(float $sun72): static
    {
        $this->sun72 = $sun72;

        return $this;
    }

    public function getTotal72(): ?float
    {
        return $this->total72;
    }

    public function setTotal72(float $total72): static
    {
        $this->total72 = $total72;

        return $this;
    }

    public function getBf82(): ?float
    {
        return $this->bf82;
    }

    public function setBf82(float $bf82): static
    {
        $this->bf82 = $bf82;

        return $this;
    }

    public function getGas82(): ?float
    {
        return $this->gas82;
    }

    public function setGas82(float $gas82): static
    {
        $this->gas82 = $gas82;

        return $this;
    }

    public function getWater82(): ?float
    {
        return $this->water82;
    }

    public function setWater82(float $water82): static
    {
        $this->water82 = $water82;

        return $this;
    }

    public function getWind82(): ?float
    {
        return $this->wind82;
    }

    public function setWind82(float $wind82): static
    {
        $this->wind82 = $wind82;

        return $this;
    }

    public function getSun82(): ?float
    {
        return $this->sun82;
    }

    public function setSun82(float $sun82): static
    {
        $this->sun82 = $sun82;

        return $this;
    }

    public function getTotal82(): ?float
    {
        return $this->total82;
    }

    public function setTotal82(float $total82): static
    {
        $this->total82 = $total82;

        return $this;
    }

    public function getBf92(): ?float
    {
        return $this->bf92;
    }

    public function setBf92(float $bf92): static
    {
        $this->bf92 = $bf92;

        return $this;
    }

    public function getGas92(): ?float
    {
        return $this->gas92;
    }

    public function setGas92(float $gas92): static
    {
        $this->gas92 = $gas92;

        return $this;
    }

    public function getWater92(): ?float
    {
        return $this->water92;
    }

    public function setWater92(float $water92): static
    {
        $this->water92 = $water92;

        return $this;
    }

    public function getWind92(): ?float
    {
        return $this->wind92;
    }

    public function setWind92(float $wind92): static
    {
        $this->wind92 = $wind92;

        return $this;
    }

    public function getSun92(): ?float
    {
        return $this->sun92;
    }

    public function setSun92(float $sun92): static
    {
        $this->sun92 = $sun92;

        return $this;
    }

    public function getTotal92(): ?float
    {
        return $this->total92;
    }

    public function setTotal92(float $total92): static
    {
        $this->total92 = $total92;

        return $this;
    }

    public function getBf02(): ?float
    {
        return $this->bf02;
    }

    public function setBf02(float $bf02): static
    {
        $this->bf02 = $bf02;

        return $this;
    }

    public function getGas02(): ?float
    {
        return $this->gas02;
    }

    public function setGas02(float $gas02): static
    {
        $this->gas02 = $gas02;

        return $this;
    }

    public function getWater02(): ?float
    {
        return $this->water02;
    }

    public function setWater02(float $water02): static
    {
        $this->water02 = $water02;

        return $this;
    }

    public function getWind02(): ?float
    {
        return $this->wind02;
    }

    public function setWind02(float $wind02): static
    {
        $this->wind02 = $wind02;

        return $this;
    }

    public function getSun02(): ?float
    {
        return $this->sun02;
    }

    public function setSun02(float $sun02): static
    {
        $this->sun02 = $sun02;

        return $this;
    }

    public function getTotal02(): ?float
    {
        return $this->total02;
    }

    public function setTotal02(float $total02): static
    {
        $this->total02 = $total02;

        return $this;
    }

    public function getBf12(): ?float
    {
        return $this->bf12;
    }

    public function setBf12(float $bf12): static
    {
        $this->bf12 = $bf12;

        return $this;
    }

    public function getGas12(): ?float
    {
        return $this->gas12;
    }

    public function setGas12(float $gas12): static
    {
        $this->gas12 = $gas12;

        return $this;
    }

    public function getWater12(): ?float
    {
        return $this->water12;
    }

    public function setWater12(float $water12): static
    {
        $this->water12 = $water12;

        return $this;
    }

    public function getWind12(): ?float
    {
        return $this->wind12;
    }

    public function setWind12(float $wind12): static
    {
        $this->wind12 = $wind12;

        return $this;
    }

    public function getSun12(): ?float
    {
        return $this->sun12;
    }

    public function setSun12(float $sun12): static
    {
        $this->sun12 = $sun12;

        return $this;
    }

    public function getTotal12(): ?float
    {
        return $this->total12;
    }

    public function setTotal12(float $total12): static
    {
        $this->total12 = $total12;

        return $this;
    }

    public function getBf22(): ?float
    {
        return $this->bf22;
    }

    public function setBf22(float $bf22): static
    {
        $this->bf22 = $bf22;

        return $this;
    }

    public function getGas22(): ?float
    {
        return $this->gas22;
    }

    public function setGas22(float $gas22): static
    {
        $this->gas22 = $gas22;

        return $this;
    }

    public function getWater22(): ?float
    {
        return $this->water22;
    }

    public function setWater22(float $water22): static
    {
        $this->water22 = $water22;

        return $this;
    }

    public function getWind22(): ?float
    {
        return $this->wind22;
    }

    public function setWind22(float $wind22): static
    {
        $this->wind22 = $wind22;

        return $this;
    }

    public function getSun22(): ?float
    {
        return $this->sun22;
    }

    public function setSun22(float $sun22): static
    {
        $this->sun22 = $sun22;

        return $this;
    }

    public function getTotal22(): ?float
    {
        return $this->total22;
    }

    public function setTotal22(float $total22): static
    {
        $this->total22 = $total22;

        return $this;
    }
}
