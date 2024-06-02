<?php

namespace Caas23\Entity;

use Caas23\Repository\EnergyUseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @SuppressWarnings(PHPMD)(ExcessivePublicCount, TooManyFields, ExcessiveClassComplexity)
 */
#[ORM\Entity(repositoryClass: EnergyUseRepository::class)]
class EnergyUse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $total07 = null;

    #[ORM\Column]
    private ?int $bf07 = null;

    #[ORM\Column]
    private ?int $sBf07 = null;

    #[ORM\Column]
    private ?int $lBf07 = null;

    #[ORM\Column]
    private ?int $bg07 = null;

    #[ORM\Column]
    private ?int $waste07 = null;

    #[ORM\Column]
    private ?int $gas07 = null;

    #[ORM\Column]
    private ?int $water07 = null;

    #[ORM\Column]
    private ?int $wind07 = null;

    #[ORM\Column]
    private ?int $sun07 = null;

    #[ORM\Column]
    private ?int $total12 = null;

    #[ORM\Column]
    private ?int $bf12 = null;

    #[ORM\Column]
    private ?int $sBf12 = null;

    #[ORM\Column]
    private ?int $lBf12 = null;

    #[ORM\Column]
    private ?int $bg12 = null;

    #[ORM\Column]
    private ?int $waste12 = null;

    #[ORM\Column]
    private ?int $gas12 = null;

    #[ORM\Column]
    private ?int $water12 = null;

    #[ORM\Column]
    private ?int $wind12 = null;

    #[ORM\Column]
    private ?int $sun12 = null;

    #[ORM\Column]
    private ?int $total17 = null;

    #[ORM\Column]
    private ?int $bf17 = null;

    #[ORM\Column]
    private ?int $sBf17 = null;

    #[ORM\Column]
    private ?int $lBf17 = null;

    #[ORM\Column]
    private ?int $bg17 = null;

    #[ORM\Column]
    private ?int $waste17 = null;

    #[ORM\Column]
    private ?int $gas17 = null;

    #[ORM\Column]
    private ?int $water17 = null;

    #[ORM\Column]
    private ?int $wind17 = null;

    #[ORM\Column]
    private ?int $sun17 = null;

    #[ORM\Column]
    private ?int $total22 = null;

    #[ORM\Column]
    private ?int $bf22 = null;

    #[ORM\Column]
    private ?int $sBf22 = null;

    #[ORM\Column]
    private ?int $lBf22 = null;

    #[ORM\Column]
    private ?int $bg22 = null;

    #[ORM\Column]
    private ?int $waste22 = null;

    #[ORM\Column]
    private ?int $gas22 = null;

    #[ORM\Column]
    private ?int $water22 = null;

    #[ORM\Column]
    private ?int $wind22 = null;

    #[ORM\Column]
    private ?int $sun22 = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTotal07(): ?int
    {
        return $this->total07;
    }

    public function setTotal07(int $total07): static
    {
        $this->total07 = $total07;

        return $this;
    }

    public function getBf07(): ?int
    {
        return $this->bf07;
    }

    public function setBf07(int $bf07): static
    {
        $this->bf07 = $bf07;

        return $this;
    }

    public function getSBf07(): ?int
    {
        return $this->sBf07;
    }

    public function setSBf07(int $sBf07): static
    {
        $this->sBf07 = $sBf07;

        return $this;
    }

    public function getLBf07(): ?int
    {
        return $this->lBf07;
    }

    public function setLBf07(int $lBf07): static
    {
        $this->lBf07 = $lBf07;

        return $this;
    }

    public function getBg07(): ?int
    {
        return $this->bg07;
    }

    public function setBg07(int $bg07): static
    {
        $this->bg07 = $bg07;

        return $this;
    }

    public function getWaste07(): ?int
    {
        return $this->waste07;
    }

    public function setWaste07(int $waste07): static
    {
        $this->waste07 = $waste07;

        return $this;
    }

    public function getGas07(): ?int
    {
        return $this->gas07;
    }

    public function setGas07(int $gas07): static
    {
        $this->gas07 = $gas07;

        return $this;
    }

    public function getWater07(): ?int
    {
        return $this->water07;
    }

    public function setWater07(int $water07): static
    {
        $this->water07 = $water07;

        return $this;
    }

    public function getWind07(): ?int
    {
        return $this->wind07;
    }

    public function setWind07(int $wind07): static
    {
        $this->wind07 = $wind07;

        return $this;
    }

    public function getSun07(): ?int
    {
        return $this->sun07;
    }

    public function setSun07(int $sun07): static
    {
        $this->sun07 = $sun07;

        return $this;
    }

    public function getTotal12(): ?int
    {
        return $this->total12;
    }

    public function setTotal12(int $total12): static
    {
        $this->total12 = $total12;

        return $this;
    }

    public function getBf12(): ?int
    {
        return $this->bf12;
    }

    public function setBf12(int $bf12): static
    {
        $this->bf12 = $bf12;

        return $this;
    }

    public function getSBf12(): ?int
    {
        return $this->sBf12;
    }

    public function setSBf12(int $sBf12): static
    {
        $this->sBf12 = $sBf12;

        return $this;
    }

    public function getLBf12(): ?int
    {
        return $this->lBf12;
    }

    public function setLBf12(int $lBf12): static
    {
        $this->lBf12 = $lBf12;

        return $this;
    }

    public function getBg12(): ?int
    {
        return $this->bg12;
    }

    public function setBg12(int $bg12): static
    {
        $this->bg12 = $bg12;

        return $this;
    }

    public function getWaste12(): ?int
    {
        return $this->waste12;
    }

    public function setWaste12(int $waste12): static
    {
        $this->waste12 = $waste12;

        return $this;
    }

    public function getGas12(): ?int
    {
        return $this->gas12;
    }

    public function setGas12(int $gas12): static
    {
        $this->gas12 = $gas12;

        return $this;
    }

    public function getWater12(): ?int
    {
        return $this->water12;
    }

    public function setWater12(int $water12): static
    {
        $this->water12 = $water12;

        return $this;
    }

    public function getWind12(): ?int
    {
        return $this->wind12;
    }

    public function setWind12(int $wind12): static
    {
        $this->wind12 = $wind12;

        return $this;
    }

    public function getSun12(): ?int
    {
        return $this->sun12;
    }

    public function setSun12(int $sun12): static
    {
        $this->sun12 = $sun12;

        return $this;
    }

    public function getTotal17(): ?int
    {
        return $this->total17;
    }

    public function setTotal17(int $total17): static
    {
        $this->total17 = $total17;

        return $this;
    }

    public function getBf17(): ?int
    {
        return $this->bf17;
    }

    public function setBf17(int $bf17): static
    {
        $this->bf17 = $bf17;

        return $this;
    }

    public function getSBf17(): ?int
    {
        return $this->sBf17;
    }

    public function setSBf17(int $sBf17): static
    {
        $this->sBf17 = $sBf17;

        return $this;
    }

    public function getLBf17(): ?int
    {
        return $this->lBf17;
    }

    public function setLBf17(int $lBf17): static
    {
        $this->lBf17 = $lBf17;

        return $this;
    }

    public function getBg17(): ?int
    {
        return $this->bg17;
    }

    public function setBg17(int $bg17): static
    {
        $this->bg17 = $bg17;

        return $this;
    }

    public function getWaste17(): ?int
    {
        return $this->waste17;
    }

    public function setWaste17(int $waste17): static
    {
        $this->waste17 = $waste17;

        return $this;
    }

    public function getGas17(): ?int
    {
        return $this->gas17;
    }

    public function setGas17(int $gas17): static
    {
        $this->gas17 = $gas17;

        return $this;
    }

    public function getWater17(): ?int
    {
        return $this->water17;
    }

    public function setWater17(int $water17): static
    {
        $this->water17 = $water17;

        return $this;
    }

    public function getWind17(): ?int
    {
        return $this->wind17;
    }

    public function setWind17(int $wind17): static
    {
        $this->wind17 = $wind17;

        return $this;
    }

    public function getSun17(): ?int
    {
        return $this->sun17;
    }

    public function setSun17(int $sun17): static
    {
        $this->sun17 = $sun17;

        return $this;
    }

    public function getTotal22(): ?int
    {
        return $this->total22;
    }

    public function setTotal22(int $total22): static
    {
        $this->total22 = $total22;

        return $this;
    }

    public function getBf22(): ?int
    {
        return $this->bf22;
    }

    public function setBf22(int $bf22): static
    {
        $this->bf22 = $bf22;

        return $this;
    }

    public function getSBf22(): ?int
    {
        return $this->sBf22;
    }

    public function setSBf22(int $sBf22): static
    {
        $this->sBf22 = $sBf22;

        return $this;
    }

    public function getLBf22(): ?int
    {
        return $this->lBf22;
    }

    public function setLBf22(int $lBf22): static
    {
        $this->lBf22 = $lBf22;

        return $this;
    }

    public function getBg22(): ?int
    {
        return $this->bg22;
    }

    public function setBg22(int $bg22): static
    {
        $this->bg22 = $bg22;

        return $this;
    }

    public function getWaste22(): ?int
    {
        return $this->waste22;
    }

    public function setWaste22(int $waste22): static
    {
        $this->waste22 = $waste22;

        return $this;
    }

    public function getGas22(): ?int
    {
        return $this->gas22;
    }

    public function setGas22(int $gas22): static
    {
        $this->gas22 = $gas22;

        return $this;
    }

    public function getWater22(): ?int
    {
        return $this->water22;
    }

    public function setWater22(int $water22): static
    {
        $this->water22 = $water22;

        return $this;
    }

    public function getWind22(): ?int
    {
        return $this->wind22;
    }

    public function setWind22(int $wind22): static
    {
        $this->wind22 = $wind22;

        return $this;
    }

    public function getSun22(): ?int
    {
        return $this->sun22;
    }

    public function setSun22(int $sun22): static
    {
        $this->sun22 = $sun22;

        return $this;
    }
}
