<?php

namespace Caas23\Entity;

use Caas23\Repository\DeceasedCovidRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @SuppressWarnings(PHPMD)(ExcessivePublicCount, TooManyFields, ExcessiveClassComplexity)
 */
#[ORM\Entity(repositoryClass: DeceasedCovidRepository::class)]
class DeceasedCovid
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $totalDeceased = null;

    #[ORM\Column]
    private ?int $menDeceased = null;

    #[ORM\Column]
    private ?int $womenDeceased = null;

    #[ORM\Column]
    private ?int $totalUnder50 = null;

    #[ORM\Column]
    private ?int $menUnder50 = null;

    #[ORM\Column]
    private ?int $womenUnder50 = null;

    #[ORM\Column]
    private ?int $total5059 = null;

    #[ORM\Column]
    private ?int $men5059 = null;

    #[ORM\Column]
    private ?int $women5059 = null;

    #[ORM\Column]
    private ?int $total6069 = null;

    #[ORM\Column]
    private ?int $men6069 = null;

    #[ORM\Column]
    private ?int $women6069 = null;

    #[ORM\Column]
    private ?int $total7074 = null;

    #[ORM\Column]
    private ?int $men7074 = null;

    #[ORM\Column]
    private ?int $women7074 = null;

    #[ORM\Column]
    private ?int $total7579 = null;

    #[ORM\Column]
    private ?int $men7579 = null;

    #[ORM\Column]
    private ?int $women7579 = null;

    #[ORM\Column]
    private ?int $total8084 = null;

    #[ORM\Column]
    private ?int $men8084 = null;

    #[ORM\Column]
    private ?int $women8084 = null;

    #[ORM\Column]
    private ?int $total8589 = null;

    #[ORM\Column]
    private ?int $men8589 = null;

    #[ORM\Column]
    private ?int $women8589 = null;

    #[ORM\Column]
    private ?int $totalOver90 = null;

    #[ORM\Column]
    private ?int $menOver90 = null;

    #[ORM\Column]
    private ?int $womenOver90 = null;

    #[ORM\Column]
    private ?int $totalCvGroup = null;

    #[ORM\Column]
    private ?int $menCvGroup = null;

    #[ORM\Column]
    private ?int $womenCvGroup = null;

    #[ORM\Column]
    private ?int $totalHbpGroup = null;

    #[ORM\Column]
    private ?int $menHbpGroup = null;

    #[ORM\Column]
    private ?int $womenHbpGroup = null;

    #[ORM\Column]
    private ?int $totalDiabetesGroup = null;

    #[ORM\Column]
    private ?int $menDiabetesGroup = null;

    #[ORM\Column]
    private ?int $womenDiabetesGroup = null;

    #[ORM\Column]
    private ?int $totalLungGroup = null;

    #[ORM\Column]
    private ?int $menLungGroup = null;

    #[ORM\Column]
    private ?int $womenLungGroup = null;

    #[ORM\Column]
    private ?int $totalNoGroup = null;

    #[ORM\Column]
    private ?int $menNoGroup = null;

    #[ORM\Column]
    private ?int $womenNoGroup = null;

    #[ORM\Column]
    private ?int $totalOneGroup = null;

    #[ORM\Column]
    private ?int $menOneGroup = null;

    #[ORM\Column]
    private ?int $womenOneGroup = null;

    #[ORM\Column]
    private ?int $totalMulitpleGroups = null;

    #[ORM\Column]
    private ?int $menMulitpleGroups = null;

    #[ORM\Column]
    private ?int $womenMulitpleGroups = null;

    #[ORM\Column]
    private ?int $totalSpecHome = null;

    #[ORM\Column]
    private ?int $menSpecHome = null;

    #[ORM\Column]
    private ?int $womenSpecHome = null;

    #[ORM\Column]
    private ?int $totalHomeCare = null;

    #[ORM\Column]
    private ?int $menHomeCare = null;

    #[ORM\Column]
    private ?int $womenHomeCare = null;

    #[ORM\Column]
    private ?int $totalHospitalDeath = null;

    #[ORM\Column]
    private ?int $menHospitalDeath = null;

    #[ORM\Column]
    private ?int $womenHospitalDeath = null;

    #[ORM\Column]
    private ?int $totalSpecHomeDeath = null;

    #[ORM\Column]
    private ?int $menSpecHomeDeath = null;

    #[ORM\Column]
    private ?int $womenSpecHomeDeath = null;

    #[ORM\Column]
    private ?int $totalOrdHomeDeath = null;

    #[ORM\Column]
    private ?int $menOrdHomeDeath = null;

    #[ORM\Column]
    private ?int $womenOrdHomeDeath = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTotalDeceased(): ?int
    {
        return $this->totalDeceased;
    }

    public function setTotalDeceased(int $totalDeceased): static
    {
        $this->totalDeceased = $totalDeceased;

        return $this;
    }

    public function getMenDeceased(): ?int
    {
        return $this->menDeceased;
    }

    public function setMenDeceased(int $menDeceased): static
    {
        $this->menDeceased = $menDeceased;

        return $this;
    }

    public function getWomenDeceased(): ?int
    {
        return $this->womenDeceased;
    }

    public function setWomenDeceased(int $womenDeceased): static
    {
        $this->womenDeceased = $womenDeceased;

        return $this;
    }

    public function getTotalUnder50(): ?int
    {
        return $this->totalUnder50;
    }

    public function setTotalUnder50(int $totalUnder50): static
    {
        $this->totalUnder50 = $totalUnder50;

        return $this;
    }

    public function getMenUnder50(): ?int
    {
        return $this->menUnder50;
    }

    public function setMenUnder50(int $menUnder50): static
    {
        $this->menUnder50 = $menUnder50;

        return $this;
    }

    public function getWomenUnder50(): ?int
    {
        return $this->womenUnder50;
    }

    public function setWomenUnder50(int $womenUnder50): static
    {
        $this->womenUnder50 = $womenUnder50;

        return $this;
    }

    public function getTotal5059(): ?int
    {
        return $this->total5059;
    }

    public function setTotal5059(int $total5059): static
    {
        $this->total5059 = $total5059;

        return $this;
    }

    public function getMen5059(): ?int
    {
        return $this->men5059;
    }

    public function setMen5059(int $men5059): static
    {
        $this->men5059 = $men5059;

        return $this;
    }

    public function getWomen5059(): ?int
    {
        return $this->women5059;
    }

    public function setWomen5059(int $women5059): static
    {
        $this->women5059 = $women5059;

        return $this;
    }

    public function getTotal6069(): ?int
    {
        return $this->total6069;
    }

    public function setTotal6069(int $total6069): static
    {
        $this->total6069 = $total6069;

        return $this;
    }

    public function getMen6069(): ?int
    {
        return $this->men6069;
    }

    public function setMen6069(int $men6069): static
    {
        $this->men6069 = $men6069;

        return $this;
    }

    public function getWomen6069(): ?int
    {
        return $this->women6069;
    }

    public function setWomen6069(int $women6069): static
    {
        $this->women6069 = $women6069;

        return $this;
    }

    public function getTotal7074(): ?int
    {
        return $this->total7074;
    }

    public function setTotal7074(int $total7074): static
    {
        $this->total7074 = $total7074;

        return $this;
    }

    public function getMen7074(): ?int
    {
        return $this->men7074;
    }

    public function setMen7074(int $men7074): static
    {
        $this->men7074 = $men7074;

        return $this;
    }

    public function getWomen7074(): ?int
    {
        return $this->women7074;
    }

    public function setWomen7074(int $women7074): static
    {
        $this->women7074 = $women7074;

        return $this;
    }

    public function getTotal7579(): ?int
    {
        return $this->total7579;
    }

    public function setTotal7579(int $total7579): static
    {
        $this->total7579 = $total7579;

        return $this;
    }

    public function getMen7579(): ?int
    {
        return $this->men7579;
    }

    public function setMen7579(int $men7579): static
    {
        $this->men7579 = $men7579;

        return $this;
    }

    public function getWomen7579(): ?int
    {
        return $this->women7579;
    }

    public function setWomen7579(int $women7579): static
    {
        $this->women7579 = $women7579;

        return $this;
    }

    public function getTotal8084(): ?int
    {
        return $this->total8084;
    }

    public function setTotal8084(int $total8084): static
    {
        $this->total8084 = $total8084;

        return $this;
    }

    public function getMen8084(): ?int
    {
        return $this->men8084;
    }

    public function setMen8084(int $men8084): static
    {
        $this->men8084 = $men8084;

        return $this;
    }

    public function getWomen8084(): ?int
    {
        return $this->women8084;
    }

    public function setWomen8084(int $women8084): static
    {
        $this->women8084 = $women8084;

        return $this;
    }

    public function getTotal8589(): ?int
    {
        return $this->total8589;
    }

    public function setTotal8589(int $total8589): static
    {
        $this->total8589 = $total8589;

        return $this;
    }

    public function getMen8589(): ?int
    {
        return $this->men8589;
    }

    public function setMen8589(int $men8589): static
    {
        $this->men8589 = $men8589;

        return $this;
    }

    public function getWomen8589(): ?int
    {
        return $this->women8589;
    }

    public function setWomen8589(int $women8589): static
    {
        $this->women8589 = $women8589;

        return $this;
    }

    public function getTotalOver90(): ?int
    {
        return $this->totalOver90;
    }

    public function setTotalOver90(int $totalOver90): static
    {
        $this->totalOver90 = $totalOver90;

        return $this;
    }

    public function getMenOver90(): ?int
    {
        return $this->menOver90;
    }

    public function setMenOver90(int $menOver90): static
    {
        $this->menOver90 = $menOver90;

        return $this;
    }

    public function getWomenOver90(): ?int
    {
        return $this->womenOver90;
    }

    public function setWomenOver90(int $womenOver90): static
    {
        $this->womenOver90 = $womenOver90;

        return $this;
    }

    public function getTotalCvGroup(): ?int
    {
        return $this->totalCvGroup;
    }

    public function setTotalCvGroup(int $totalCvGroup): static
    {
        $this->totalCvGroup = $totalCvGroup;

        return $this;
    }

    public function getMenCvGroup(): ?int
    {
        return $this->menCvGroup;
    }

    public function setMenCvGroup(int $menCvGroup): static
    {
        $this->menCvGroup = $menCvGroup;

        return $this;
    }

    public function getWomenCvGroup(): ?int
    {
        return $this->womenCvGroup;
    }

    public function setWomenCvGroup(int $womenCvGroup): static
    {
        $this->womenCvGroup = $womenCvGroup;

        return $this;
    }

    public function getTotalHbpGroup(): ?int
    {
        return $this->totalHbpGroup;
    }

    public function setTotalHbpGroup(int $totalHbpGroup): static
    {
        $this->totalHbpGroup = $totalHbpGroup;

        return $this;
    }

    public function getMenHbpGroup(): ?int
    {
        return $this->menHbpGroup;
    }

    public function setMenHbpGroup(int $menHbpGroup): static
    {
        $this->menHbpGroup = $menHbpGroup;

        return $this;
    }

    public function getWomenHbpGroup(): ?int
    {
        return $this->womenHbpGroup;
    }

    public function setWomenHbpGroup(int $womenHbpGroup): static
    {
        $this->womenHbpGroup = $womenHbpGroup;

        return $this;
    }

    public function getTotalDiabetesGroup(): ?int
    {
        return $this->totalDiabetesGroup;
    }

    public function setTotalDiabetesGroup(int $totalDiabetesGroup): static
    {
        $this->totalDiabetesGroup = $totalDiabetesGroup;

        return $this;
    }

    public function getMenDiabetesGroup(): ?int
    {
        return $this->menDiabetesGroup;
    }

    public function setMenDiabetesGroup(int $menDiabetesGroup): static
    {
        $this->menDiabetesGroup = $menDiabetesGroup;

        return $this;
    }

    public function getWomenDiabetesGroup(): ?int
    {
        return $this->womenDiabetesGroup;
    }

    public function setWomenDiabetesGroup(int $womenDiabetesGroup): static
    {
        $this->womenDiabetesGroup = $womenDiabetesGroup;

        return $this;
    }

    public function getTotalLungGroup(): ?int
    {
        return $this->totalLungGroup;
    }

    public function setTotalLungGroup(int $totalLungGroup): static
    {
        $this->totalLungGroup = $totalLungGroup;

        return $this;
    }

    public function getMenLungGroup(): ?int
    {
        return $this->menLungGroup;
    }

    public function setMenLungGroup(int $menLungGroup): static
    {
        $this->menLungGroup = $menLungGroup;

        return $this;
    }

    public function getWomenLungGroup(): ?int
    {
        return $this->womenLungGroup;
    }

    public function setWomenLungGroup(int $womenLungGroup): static
    {
        $this->womenLungGroup = $womenLungGroup;

        return $this;
    }

    public function getTotalNoGroup(): ?int
    {
        return $this->totalNoGroup;
    }

    public function setTotalNoGroup(int $totalNoGroup): static
    {
        $this->totalNoGroup = $totalNoGroup;

        return $this;
    }

    public function getMenNoGroup(): ?int
    {
        return $this->menNoGroup;
    }

    public function setMenNoGroup(int $menNoGroup): static
    {
        $this->menNoGroup = $menNoGroup;

        return $this;
    }

    public function getWomenNoGroup(): ?int
    {
        return $this->womenNoGroup;
    }

    public function setWomenNoGroup(int $womenNoGroup): static
    {
        $this->womenNoGroup = $womenNoGroup;

        return $this;
    }

    public function getTotalOneGroup(): ?int
    {
        return $this->totalOneGroup;
    }

    public function setTotalOneGroup(int $totalOneGroup): static
    {
        $this->totalOneGroup = $totalOneGroup;

        return $this;
    }

    public function getMenOneGroup(): ?int
    {
        return $this->menOneGroup;
    }

    public function setMenOneGroup(int $menOneGroup): static
    {
        $this->menOneGroup = $menOneGroup;

        return $this;
    }

    public function getWomenOneGroup(): ?int
    {
        return $this->womenOneGroup;
    }

    public function setWomenOneGroup(int $womenOneGroup): static
    {
        $this->womenOneGroup = $womenOneGroup;

        return $this;
    }

    public function getTotalMulitpleGroups(): ?int
    {
        return $this->totalMulitpleGroups;
    }

    public function setTotalMulitpleGroups(int $totalMulitpleGroups): static
    {
        $this->totalMulitpleGroups = $totalMulitpleGroups;

        return $this;
    }

    public function getMenMulitpleGroups(): ?int
    {
        return $this->menMulitpleGroups;
    }

    public function setMenMulitpleGroups(int $menMulitpleGroups): static
    {
        $this->menMulitpleGroups = $menMulitpleGroups;

        return $this;
    }

    public function getWomenMulitpleGroups(): ?int
    {
        return $this->womenMulitpleGroups;
    }

    public function setWomenMulitpleGroups(int $womenMulitpleGroups): static
    {
        $this->womenMulitpleGroups = $womenMulitpleGroups;

        return $this;
    }

    public function getTotalSpecHome(): ?int
    {
        return $this->totalSpecHome;
    }

    public function setTotalSpecHome(int $totalSpecHome): static
    {
        $this->totalSpecHome = $totalSpecHome;

        return $this;
    }

    public function getMenSpecHome(): ?int
    {
        return $this->menSpecHome;
    }

    public function setMenSpecHome(int $menSpecHome): static
    {
        $this->menSpecHome = $menSpecHome;

        return $this;
    }

    public function getWomenSpecHome(): ?int
    {
        return $this->womenSpecHome;
    }

    public function setWomenSpecHome(int $womenSpecHome): static
    {
        $this->womenSpecHome = $womenSpecHome;

        return $this;
    }

    public function getTotalHomeCare(): ?int
    {
        return $this->totalHomeCare;
    }

    public function setTotalHomeCare(int $totalHomeCare): static
    {
        $this->totalHomeCare = $totalHomeCare;

        return $this;
    }

    public function getMenHomeCare(): ?int
    {
        return $this->menHomeCare;
    }

    public function setMenHomeCare(int $menHomeCare): static
    {
        $this->menHomeCare = $menHomeCare;

        return $this;
    }

    public function getWomenHomeCare(): ?int
    {
        return $this->womenHomeCare;
    }

    public function setWomenHomeCare(int $womenHomeCare): static
    {
        $this->womenHomeCare = $womenHomeCare;

        return $this;
    }

    public function getTotalHospitalDeath(): ?int
    {
        return $this->totalHospitalDeath;
    }

    public function setTotalHospitalDeath(int $totalHospitalDeath): static
    {
        $this->totalHospitalDeath = $totalHospitalDeath;

        return $this;
    }

    public function getMenHospitalDeath(): ?int
    {
        return $this->menHospitalDeath;
    }

    public function setMenHospitalDeath(int $menHospitalDeath): static
    {
        $this->menHospitalDeath = $menHospitalDeath;

        return $this;
    }

    public function getWomenHospitalDeath(): ?int
    {
        return $this->womenHospitalDeath;
    }

    public function setWomenHospitalDeath(int $womenHospitalDeath): static
    {
        $this->womenHospitalDeath = $womenHospitalDeath;

        return $this;
    }

    public function getTotalSpecHomeDeath(): ?int
    {
        return $this->totalSpecHomeDeath;
    }

    public function setTotalSpecHomeDeath(int $totalSpecHomeDeath): static
    {
        $this->totalSpecHomeDeath = $totalSpecHomeDeath;

        return $this;
    }

    public function getMenSpecHomeDeath(): ?int
    {
        return $this->menSpecHomeDeath;
    }

    public function setMenSpecHomeDeath(int $menSpecHomeDeath): static
    {
        $this->menSpecHomeDeath = $menSpecHomeDeath;

        return $this;
    }

    public function getWomenSpecHomeDeath(): ?int
    {
        return $this->womenSpecHomeDeath;
    }

    public function setWomenSpecHomeDeath(int $womenSpecHomeDeath): static
    {
        $this->womenSpecHomeDeath = $womenSpecHomeDeath;

        return $this;
    }

    public function getTotalOrdHomeDeath(): ?int
    {
        return $this->totalOrdHomeDeath;
    }

    public function setTotalOrdHomeDeath(int $totalOrdHomeDeath): static
    {
        $this->totalOrdHomeDeath = $totalOrdHomeDeath;

        return $this;
    }

    public function getMenOrdHomeDeath(): ?int
    {
        return $this->menOrdHomeDeath;
    }

    public function setMenOrdHomeDeath(int $menOrdHomeDeath): static
    {
        $this->menOrdHomeDeath = $menOrdHomeDeath;

        return $this;
    }

    public function getWomenOrdHomeDeath(): ?int
    {
        return $this->womenOrdHomeDeath;
    }

    public function setWomenOrdHomeDeath(int $womenOrdHomeDeath): static
    {
        $this->womenOrdHomeDeath = $womenOrdHomeDeath;

        return $this;
    }
}
