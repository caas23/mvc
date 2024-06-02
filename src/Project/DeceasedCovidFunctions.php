<?php

namespace Caas23\Project;

use Caas23\Entity\DeceasedCovid;

class DeceasedCovidFunctions
{
    public function add(DeceasedCovid $entity): void
    {
        $entity->setTotalDeceased(5771);
        $entity->setMenDeceased(3104);
        $entity->setWomenDeceased(2667);
        $entity->setTotalUnder50(60);
        $entity->setMenUnder50(38);
        $entity->setWomenUnder50(22);
        $entity->setTotal5059(158);
        $entity->setMen5059(125);
        $entity->setWomen5059(33);
        $entity->setTotal6069(383);
        $entity->setMen6069(277);
        $entity->setWomen6069(106);

        $entity->setTotal7074(472);
        $entity->setMen7074(326);
        $entity->setWomen7074(146);
        $entity->setTotal7579(727);
        $entity->setMen7579(443);
        $entity->setWomen7579(284);
        $entity->setTotal8084(1103);
        $entity->setMen8084(638);
        $entity->setWomen8084(465);
        $entity->setTotal8589(1339);
        $entity->setMen8589(651);
        $entity->setWomen8589(688);
        $entity->setTotalOver90(1529);
        $entity->setMenOver90(606);
        $entity->setWomenOver90(923);

        $entity->setTotalCvGroup(2849);
        $entity->setMenCvGroup(1666);
        $entity->setWomenCvGroup(1183);
        $entity->setTotalHbpGroup(4519);
        $entity->setMenHbpGroup(2427);
        $entity->setWomenHbpGroup(2092);
        $entity->setTotalDiabetesGroup(1598);
        $entity->setMenDiabetesGroup(957);
        $entity->setWomenDiabetesGroup(641);
        $entity->setTotalLungGroup(811);
        $entity->setMenLungGroup(392);
        $entity->setWomenLungGroup(419);
        $entity->setTotalNoGroup(890);
        $entity->setMenNoGroup(456);
        $entity->setWomenNoGroup(434);
        $entity->setTotalOneGroup(1544);
        $entity->setMenOneGroup(752);
        $entity->setWomenOneGroup(792);
        $entity->setTotalMulitpleGroups(3337);
        $entity->setMenMulitpleGroups(1896);
        $entity->setWomenMulitpleGroups(1441);

        $entity->setTotalSpecHome(2682);
        $entity->setMenSpecHome(1164);
        $entity->setWomenSpecHome(1518);
        $entity->setTotalHomeCare(1535);
        $entity->setMenHomeCare(836);
        $entity->setWomenHomeCare(699);
        $entity->setTotalHospitalDeath(2782);
        $entity->setMenHospitalDeath(1739);
        $entity->setWomenHospitalDeath(1043);
        $entity->setTotalSpecHomeDeath(2625);
        $entity->setMenSpecHomeDeath(1151);
        $entity->setWomenSpecHomeDeath(1474);
        $entity->setTotalOrdHomeDeath(223);
        $entity->setMenOrdHomeDeath(125);
        $entity->setWomenOrdHomeDeath(98);
    }

    /**
     * Get data of all deceased.
     * @param array<int|string, \Caas23\Entity\DeceasedCovid> $data
     * @return array<string, int|null>
     */
    public function getAllDeceased(array $data): array
    {
        $allDeceased = [];
        foreach ($data as $d) {
            $allDeceased = [
                'Totalt' => $d->getTotalDeceased(),
                'Man' => $d->getMenDeceased(),
                'Kvinnor' => $d->getWomenDeceased(),
            ];
        }
        return $allDeceased;
    }

    /**
     * Get data of total deceased - by age.
     * @param array<int|string, \Caas23\Entity\DeceasedCovid> $data
     * @return array<int, int|null>
     */
    public function getDeceasedByAgeTotal(array $data): array
    {
        $allDeceased = [];
        foreach ($data as $d) {
            $allDeceased = [
                $d->getTotalUnder50(),
                $d->getTotal5059(),
                $d->getTotal6069(),
                $d->getTotal7074(),
                $d->getTotal7579(),
                $d->getTotal8084(),
                $d->getTotal8589(),
                $d->getTotalOver90(),
            ];
        }
        return $allDeceased;
    }

    /**
     * Get data of men deceased - by age.
     * @param array<int|string, \Caas23\Entity\DeceasedCovid> $data
     * @return array<int, int|null>
     */
    public function getDeceasedByAgeMen(array $data): array
    {
        $allDeceased = [];
        foreach ($data as $d) {
            $allDeceased = [
                $d->getMenUnder50(),
                $d->getMen5059(),
                $d->getMen6069(),
                $d->getMen7074(),
                $d->getMen7579(),
                $d->getMen8084(),
                $d->getMen8589(),
                $d->getMenOver90(),
            ];
        }
        return $allDeceased;
    }

    /**
     * Get data of women deceased - by age.
     * @param array<int|string, \Caas23\Entity\DeceasedCovid> $data
     * @return array<int, int|null>
     */
    public function getDeceasedByAgeWomen(array $data): array
    {
        $allDeceased = [];
        foreach ($data as $d) {
            $allDeceased = [
                $d->getWomenUnder50(),
                $d->getWomen5059(),
                $d->getWomen6069(),
                $d->getWomen7074(),
                $d->getWomen7579(),
                $d->getWomen8084(),
                $d->getWomen8589(),
                $d->getWomenOver90(),
            ];
        }
        return $allDeceased;
    }

    /**
     * Get data of all deceased - by age.
     * @param array<int|string, \Caas23\Entity\DeceasedCovid> $data
     * @return array<string, int|null>
     */
    public function getDeceasedByAge(array $data): array
    {
        $allDeceased = [];
        foreach ($data as $d) {
            $allDeceased = [
                'Total_under_50' => $d->getTotalUnder50(),
                'Man_under_50' => $d->getMenUnder50(),
                'Kvinnor_under_50' => $d->getWomenUnder50(),
                'Total_50_59' => $d->getTotal5059(),
                'Man_50_59' => $d->getMen5059(),
                'Kvinnor_50_59' => $d->getWomen5059(),
                'Total_60_69' => $d->getTotal6069(),
                'Man_60_69' => $d->getMen6069(),
                'Kvinnor_60_69' => $d->getWomen6069(),
                'Total_70_74' => $d->getTotal7074(),
                'Man_70_74' => $d->getMen7074(),
                'Kvinnor_70_74' => $d->getWomen7074(),
                'Total_75_79' => $d->getTotal7579(),
                'Man_75_79' => $d->getMen7579(),
                'Kvinnor_75_79' => $d->getWomen7579(),
                'Total_80_84' => $d->getTotal8084(),
                'Man_80_84' => $d->getMen8084(),
                'Kvinnor_80_84' => $d->getWomen8084(),
                'Total_85_89' => $d->getTotal8589(),
                'Man_85_89' => $d->getMen8589(),
                'Kvinnor_85_89' => $d->getWomen8589(),
                'Total_over_90' => $d->getTotalOver90(),
                'Man_over_90' => $d->getMenOver90(),
                'Kvinnor_over_90' => $d->getWomenOver90(),
            ];
        }
        return $allDeceased;
    }

    /**
     * Get data of total deceased - by group.
     * @param array<int|string, \Caas23\Entity\DeceasedCovid> $data
     * @return array<int, int|null>
     */
    public function getDeceasedByGroupTotal(array $data): array
    {
        $allData = [];
        foreach ($data as $d) {
            $allData = [
                $d->getTotalCvGroup(),
                $d->getTotalHbpGroup(),
                $d->getTotalDiabetesGroup(),
                $d->getTotalLungGroup(),
                $d->getTotalNoGroup(),
                $d->getTotalOneGroup(),
                $d->getTotalMulitpleGroups(),
            ];
        }
        return $allData;
    }

    /**
     * Get data of men deceased - by group.
     * @param array<int|string, \Caas23\Entity\DeceasedCovid> $data
     * @return array<int, int|null>
     */
    public function getDeceasedByGroupMen(array $data): array
    {
        $allData = [];
        foreach ($data as $d) {
            $allData = [
                $d->getMenCvGroup(),
                $d->getMenHbpGroup(),
                $d->getMenDiabetesGroup(),
                $d->getMenLungGroup(),
                $d->getMenNoGroup(),
                $d->getMenOneGroup(),
                $d->getMenMulitpleGroups(),
            ];
        }
        return $allData;
    }

    /**
     * Get data of women deceased - by group.
     * @param array<int|string, \Caas23\Entity\DeceasedCovid> $data
     * @return array<int, int|null>
     */
    public function getDeceasedByGroupWomen(array $data): array
    {
        $allData = [];
        foreach ($data as $d) {
            $allData = [
                $d->getWomenCvGroup(),
                $d->getWomenHbpGroup(),
                $d->getWomenDiabetesGroup(),
                $d->getWomenLungGroup(),
                $d->getWomenNoGroup(),
                $d->getWomenOneGroup(),
                $d->getWomenMulitpleGroups(),
            ];
        }
        return $allData;
    }

    /**
     * Get data of total deceased - by home.
     * @param array<int|string, \Caas23\Entity\DeceasedCovid> $data
     * @return array<int, int|null>
     */
    public function getDeceasedByHomeTotal(array $data): array
    {
        $allData = [];
        foreach ($data as $d) {
            $allData = [
                $d->getTotalSpecHome(),
                $d->getTotalHomeCare(),
            ];
        }
        return $allData;
    }

    /**
     * Get data of men deceased - by home.
     * @param array<int|string, \Caas23\Entity\DeceasedCovid> $data
     * @return array<int, int|null>
     */
    public function getDeceasedByHomeMen(array $data): array
    {
        $allData = [];
        foreach ($data as $d) {
            $allData = [
                $d->getMenSpecHome(),
                $d->getMenHomeCare(),
            ];
        }
        return $allData;
    }

    /**
     * Get data of women deceased - by home.
     * @param array<int|string, \Caas23\Entity\DeceasedCovid> $data
     * @return array<int, int|null>
     */
    public function getDeceasedByHomeWomen(array $data): array
    {
        $allData = [];
        foreach ($data as $d) {
            $allData = [
                $d->getWomenSpecHome(),
                $d->getWomenHomeCare(),
            ];
        }
        return $allData;
    }

    /**
     * Get data of total deceased - by place.
     * @param array<int|string, \Caas23\Entity\DeceasedCovid> $data
     * @return array<int, int|null>
     */
    public function getDeceasedByPlaceTotal(array $data): array
    {
        $allData = [];
        foreach ($data as $d) {
            $allData = [
                $d->getTotalHospitalDeath(),
                $d->getTotalSpecHomeDeath(),
                $d->getTotalOrdHomeDeath(),
            ];
        }
        return $allData;
    }

    /**
     * Get data of men deceased - by place.
     * @param array<int|string, \Caas23\Entity\DeceasedCovid> $data
     * @return array<int, int|null>
     */
    public function getDeceasedByPlaceMen(array $data): array
    {
        $allData = [];
        foreach ($data as $d) {
            $allData = [
                $d->getMenHospitalDeath(),
                $d->getMenSpecHomeDeath(),
                $d->getMenOrdHomeDeath(),
            ];
        }
        return $allData;
    }

    /**
     * Get data of women deceased - by place.
     * @param array<int|string, \Caas23\Entity\DeceasedCovid> $data
     * @return array<int, int|null>
     */
    public function getDeceasedByPlaceWomen(array $data): array
    {
        $allData = [];
        foreach ($data as $d) {
            $allData = [
                $d->getWomenHospitalDeath(),
                $d->getWomenSpecHomeDeath(),
                $d->getWomenOrdHomeDeath()
            ];
        }
        return $allData;
    }
}
