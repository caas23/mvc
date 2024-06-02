<?php

namespace Caas23\Project;

use Caas23\Entity\EnergyUse;

class EnergyUseFunctions
{
    public function add(EnergyUse $entity): void
    {
        $entity->setTotal07(596);
        $entity->setBf07(113);
        $entity->setSBf07(98);
        $entity->setLBf07(8);
        $entity->setBg07(1);
        $entity->setWaste07(6);
        $entity->setGas07(11);
        $entity->setWater07(66);
        $entity->setWind07(1);
        $entity->setSun07(0);

        $entity->setTotal12(565);
        $entity->setBf12(128);
        $entity->setSBf12(108);
        $entity->setLBf12(11);
        $entity->setBg12(1);
        $entity->setWaste12(9);
        $entity->setGas12(12);
        $entity->setWater12(79);
        $entity->setWind12(7);
        $entity->setSun12(0);

        $entity->setTotal17(570);
        $entity->setBf17(142);
        $entity->setSBf17(108);
        $entity->setLBf17(22);
        $entity->setBg17(2);
        $entity->setWaste17(10);
        $entity->setGas17(12);
        $entity->setWater17(65);
        $entity->setWind17(18);
        $entity->setSun17(0);

        $entity->setTotal22(508);
        $entity->setBf22(154);
        $entity->setSBf22(112);
        $entity->setLBf22(27);
        $entity->setBg22(3);
        $entity->setWaste22(11);
        $entity->setGas22(8);
        $entity->setWater22(70);
        $entity->setWind22(33);
        $entity->setSun22(2);
    }

    /**
     * Get data for year 2007.
     * @param array<int|string, \Caas23\Entity\EnergyUse> $data
     * @return array<int, float|null>
     */
    public function get07(array $data): array
    {
        $total = [];
        foreach ($data as $d) {
            $total = [
                $d->getTotal07(),
                $d->getBf07(),
                $d->getSBf07(),
                $d->getLBf07(),
                $d->getBg07(),
                $d->getWaste07(),
                $d->getGas07(),
                $d->getWater07(),
                $d->getWind07(),
                $d->getSun07(),
            ];
        }
        return $total;
    }

    /**
     * Get data for year 2012.
     * @param array<int|string, \Caas23\Entity\EnergyUse> $data
     * @return array<int, float|null>
     */
    public function get12(array $data): array
    {
        $total = [];
        foreach ($data as $d) {
            $total = [
                $d->getTotal12(),
                $d->getBf12(),
                $d->getSBf12(),
                $d->getLBf12(),
                $d->getBg12(),
                $d->getWaste12(),
                $d->getGas12(),
                $d->getWater12(),
                $d->getWind12(),
                $d->getSun12(),
            ];
        }
        return $total;
    }

    /**
     * Get data for year 2017.
     * @param array<int|string, \Caas23\Entity\EnergyUse> $data
     * @return array<int, float|null>
     */
    public function get17(array $data): array
    {
        $total = [];
        foreach ($data as $d) {
            $total = [
                $d->getTotal17(),
                $d->getBf17(),
                $d->getSBf17(),
                $d->getLBf17(),
                $d->getBg17(),
                $d->getWaste17(),
                $d->getGas17(),
                $d->getWater17(),
                $d->getWind17(),
                $d->getSun17(),
            ];
        }
        return $total;
    }

    /**
     * Get data for year 2022.
     * @param array<int|string, \Caas23\Entity\EnergyUse> $data
     * @return array<int, float|null>
     */
    public function get22(array $data): array
    {
        $total = [];
        foreach ($data as $d) {
            $total = [
                $d->getTotal22(),
                $d->getBf22(),
                $d->getSBf22(),
                $d->getLBf22(),
                $d->getBg22(),
                $d->getWaste22(),
                $d->getGas22(),
                $d->getWater22(),
                $d->getWind22(),
                $d->getSun22(),
            ];
        }
        return $total;
    }
}
