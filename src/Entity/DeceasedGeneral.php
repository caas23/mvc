<?php

namespace Caas23\Entity;

use Caas23\Repository\DeceasedGeneralRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @SuppressWarnings(PHPMD)(TooManyFields)
 */
#[ORM\Entity(repositoryClass: DeceasedGeneralRepository::class)]
class DeceasedGeneral
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $total17 = null;

    #[ORM\Column]
    private ?int $men17 = null;

    #[ORM\Column]
    private ?int $women17 = null;

    #[ORM\Column]
    private ?int $total18 = null;

    #[ORM\Column]
    private ?int $men18 = null;

    #[ORM\Column]
    private ?int $women18 = null;

    #[ORM\Column]
    private ?int $total19 = null;

    #[ORM\Column]
    private ?int $men19 = null;

    #[ORM\Column]
    private ?int $women19 = null;

    #[ORM\Column]
    private ?int $total20 = null;

    #[ORM\Column]
    private ?int $men20 = null;

    #[ORM\Column]
    private ?int $women20 = null;

    #[ORM\Column]
    private ?int $total21 = null;

    #[ORM\Column]
    private ?int $men21 = null;

    #[ORM\Column]
    private ?int $women21 = null;

    #[ORM\Column]
    private ?int $total22 = null;

    #[ORM\Column]
    private ?int $men22 = null;

    #[ORM\Column]
    private ?int $women22 = null;

    #[ORM\Column]
    private ?int $total23 = null;

    #[ORM\Column]
    private ?int $men23 = null;

    #[ORM\Column]
    private ?int $women23 = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getMen17(): ?int
    {
        return $this->men17;
    }

    public function setMen17(int $men17): static
    {
        $this->men17 = $men17;

        return $this;
    }

    public function getWomen17(): ?int
    {
        return $this->women17;
    }

    public function setWomen17(int $women17): static
    {
        $this->women17 = $women17;

        return $this;
    }

    public function getTotal18(): ?int
    {
        return $this->total18;
    }

    public function setTotal18(int $total18): static
    {
        $this->total18 = $total18;

        return $this;
    }

    public function getMen18(): ?int
    {
        return $this->men18;
    }

    public function setMen18(int $men18): static
    {
        $this->men18 = $men18;

        return $this;
    }

    public function getWomen18(): ?int
    {
        return $this->women18;
    }

    public function setWomen18(int $women18): static
    {
        $this->women18 = $women18;

        return $this;
    }

    public function getTotal19(): ?int
    {
        return $this->total19;
    }

    public function setTotal19(int $total19): static
    {
        $this->total19 = $total19;

        return $this;
    }

    public function getMen19(): ?int
    {
        return $this->men19;
    }

    public function setMen19(int $men19): static
    {
        $this->men19 = $men19;

        return $this;
    }

    public function getWomen19(): ?int
    {
        return $this->women19;
    }

    public function setWomen19(int $women19): static
    {
        $this->women19 = $women19;

        return $this;
    }

    public function getTotal20(): ?int
    {
        return $this->total20;
    }

    public function setTotal20(int $total20): static
    {
        $this->total20 = $total20;

        return $this;
    }

    public function getMen20(): ?int
    {
        return $this->men20;
    }

    public function setMen20(int $men20): static
    {
        $this->men20 = $men20;

        return $this;
    }

    public function getWomen20(): ?int
    {
        return $this->women20;
    }

    public function setWomen20(int $women20): static
    {
        $this->women20 = $women20;

        return $this;
    }

    public function getTotal21(): ?int
    {
        return $this->total21;
    }

    public function setTotal21(int $total21): static
    {
        $this->total21 = $total21;

        return $this;
    }

    public function getMen21(): ?int
    {
        return $this->men21;
    }

    public function setMen21(int $men21): static
    {
        $this->men21 = $men21;

        return $this;
    }

    public function getWomen21(): ?int
    {
        return $this->women21;
    }

    public function setWomen21(int $women21): static
    {
        $this->women21 = $women21;

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

    public function getMen22(): ?int
    {
        return $this->men22;
    }

    public function setMen22(int $men22): static
    {
        $this->men22 = $men22;

        return $this;
    }

    public function getWomen22(): ?int
    {
        return $this->women22;
    }

    public function setWomen22(int $women22): static
    {
        $this->women22 = $women22;

        return $this;
    }

    public function getTotal23(): ?int
    {
        return $this->total23;
    }

    public function setTotal23(int $total23): static
    {
        $this->total23 = $total23;

        return $this;
    }

    public function getMen23(): ?int
    {
        return $this->men23;
    }

    public function setMen23(int $men23): static
    {
        $this->men23 = $men23;

        return $this;
    }

    public function getWomen23(): ?int
    {
        return $this->women23;
    }

    public function setWomen23(int $women23): static
    {
        $this->women23 = $women23;

        return $this;
    }
}
