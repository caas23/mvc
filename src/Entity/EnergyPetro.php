<?php

namespace Caas23\Entity;

use Caas23\Repository\EnergyPetroRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @SuppressWarnings(PHPMD)(ExcessivePublicCount, TooManyFields, ExcessiveClassComplexity)
 */
#[ORM\Entity(repositoryClass: EnergyPetroRepository::class)]
class EnergyPetro
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $ind87 = null;

    #[ORM\Column]
    private ?float $tr87 = null;

    #[ORM\Column]
    private ?float $ho87 = null;

    #[ORM\Column]
    private ?float $total87 = null;

    #[ORM\Column]
    private ?float $ind92 = null;

    #[ORM\Column]
    private ?float $tr92 = null;

    #[ORM\Column]
    private ?float $ho92 = null;

    #[ORM\Column]
    private ?float $total92 = null;

    #[ORM\Column]
    private ?float $ind97 = null;

    #[ORM\Column]
    private ?float $tr97 = null;

    #[ORM\Column]
    private ?float $ho97 = null;

    #[ORM\Column]
    private ?float $total97 = null;

    #[ORM\Column]
    private ?float $ind02 = null;

    #[ORM\Column]
    private ?float $tr02 = null;

    #[ORM\Column]
    private ?float $ho02 = null;

    #[ORM\Column]
    private ?float $total02 = null;

    #[ORM\Column]
    private ?float $ind07 = null;

    #[ORM\Column]
    private ?float $tr07 = null;

    #[ORM\Column]
    private ?float $ho07 = null;

    #[ORM\Column]
    private ?float $total07 = null;

    #[ORM\Column]
    private ?float $ind12 = null;

    #[ORM\Column]
    private ?float $tr12 = null;

    #[ORM\Column]
    private ?float $ho12 = null;

    #[ORM\Column]
    private ?float $total12 = null;

    #[ORM\Column]
    private ?float $ind17 = null;

    #[ORM\Column]
    private ?float $tr17 = null;

    #[ORM\Column]
    private ?float $ho17 = null;

    #[ORM\Column]
    private ?float $total17 = null;

    #[ORM\Column]
    private ?float $ind22 = null;

    #[ORM\Column]
    private ?float $tr22 = null;

    #[ORM\Column]
    private ?float $ho22 = null;

    #[ORM\Column]
    private ?float $total22 = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInd87(): ?float
    {
        return $this->ind87;
    }

    public function setInd87(float $ind87): static
    {
        $this->ind87 = $ind87;

        return $this;
    }

    public function getTr87(): ?float
    {
        return $this->tr87;
    }

    public function setTr87(float $tr87): static
    {
        $this->tr87 = $tr87;

        return $this;
    }

    public function getHo87(): ?float
    {
        return $this->ho87;
    }

    public function setHo87(float $ho87): static
    {
        $this->ho87 = $ho87;

        return $this;
    }

    public function getTotal87(): ?float
    {
        return $this->total87;
    }

    public function setTotal87(float $total87): static
    {
        $this->total87 = $total87;

        return $this;
    }

    public function getInd92(): ?float
    {
        return $this->ind92;
    }

    public function setInd92(float $ind92): static
    {
        $this->ind92 = $ind92;

        return $this;
    }

    public function getTr92(): ?float
    {
        return $this->tr92;
    }

    public function setTr92(float $tr92): static
    {
        $this->tr92 = $tr92;

        return $this;
    }

    public function getHo92(): ?float
    {
        return $this->ho92;
    }

    public function setHo92(float $ho92): static
    {
        $this->ho92 = $ho92;

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

    public function getInd97(): ?float
    {
        return $this->ind97;
    }

    public function setInd97(float $ind97): static
    {
        $this->ind97 = $ind97;

        return $this;
    }

    public function getTr97(): ?float
    {
        return $this->tr97;
    }

    public function setTr97(float $tr97): static
    {
        $this->tr97 = $tr97;

        return $this;
    }

    public function getHo97(): ?float
    {
        return $this->ho97;
    }

    public function setHo97(float $ho97): static
    {
        $this->ho97 = $ho97;

        return $this;
    }

    public function getTotal97(): ?float
    {
        return $this->total97;
    }

    public function setTotal97(float $total97): static
    {
        $this->total97 = $total97;

        return $this;
    }

    public function getInd02(): ?float
    {
        return $this->ind02;
    }

    public function setInd02(float $ind02): static
    {
        $this->ind02 = $ind02;

        return $this;
    }

    public function getTr02(): ?float
    {
        return $this->tr02;
    }

    public function setTr02(float $tr02): static
    {
        $this->tr02 = $tr02;

        return $this;
    }

    public function getHo02(): ?float
    {
        return $this->ho02;
    }

    public function setHo02(float $ho02): static
    {
        $this->ho02 = $ho02;

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

    public function getInd07(): ?float
    {
        return $this->ind07;
    }

    public function setInd07(float $ind07): static
    {
        $this->ind07 = $ind07;

        return $this;
    }

    public function getTr07(): ?float
    {
        return $this->tr07;
    }

    public function setTr07(float $tr07): static
    {
        $this->tr07 = $tr07;

        return $this;
    }

    public function getHo07(): ?float
    {
        return $this->ho07;
    }

    public function setHo07(float $ho07): static
    {
        $this->ho07 = $ho07;

        return $this;
    }

    public function getTotal07(): ?float
    {
        return $this->total07;
    }

    public function setTotal07(float $total07): static
    {
        $this->total07 = $total07;

        return $this;
    }

    public function getInd12(): ?float
    {
        return $this->ind12;
    }

    public function setInd12(float $ind12): static
    {
        $this->ind12 = $ind12;

        return $this;
    }

    public function getTr12(): ?float
    {
        return $this->tr12;
    }

    public function setTr12(float $tr12): static
    {
        $this->tr12 = $tr12;

        return $this;
    }

    public function getHo12(): ?float
    {
        return $this->ho12;
    }

    public function setHo12(float $ho12): static
    {
        $this->ho12 = $ho12;

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

    public function getInd17(): ?float
    {
        return $this->ind17;
    }

    public function setInd17(float $ind17): static
    {
        $this->ind17 = $ind17;

        return $this;
    }

    public function getTr17(): ?float
    {
        return $this->tr17;
    }

    public function setTr17(float $tr17): static
    {
        $this->tr17 = $tr17;

        return $this;
    }

    public function getHo17(): ?float
    {
        return $this->ho17;
    }

    public function setHo17(float $ho17): static
    {
        $this->ho17 = $ho17;

        return $this;
    }

    public function getTotal17(): ?float
    {
        return $this->total17;
    }

    public function setTotal17(float $total17): static
    {
        $this->total17 = $total17;

        return $this;
    }

    public function getInd22(): ?float
    {
        return $this->ind22;
    }

    public function setInd22(float $ind22): static
    {
        $this->ind22 = $ind22;

        return $this;
    }

    public function getTr22(): ?float
    {
        return $this->tr22;
    }

    public function setTr22(float $tr22): static
    {
        $this->tr22 = $tr22;

        return $this;
    }

    public function getHo22(): ?float
    {
        return $this->ho22;
    }

    public function setHo22(float $ho22): static
    {
        $this->ho22 = $ho22;

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
