<?php

namespace Caas23\Project;

use Caas23\Entity\EnergySupply;

/**
 * EnergySupplyFunctions class.
 */
class EnergySupplyFunctions
{
    public function add(EnergySupply $entity): void
    {
        $entity->setBf72(40);
        $entity->setGas72(0);
        $entity->setWater72(54);
        $entity->setWind72(0);
        $entity->setSun72(0);
        $entity->setTotal72(433.4);

        $entity->setBf82(48);
        $entity->setGas82(0);
        $entity->setWater82(55);
        $entity->setWind82(0);
        $entity->setSun82(0);
        $entity->setTotal82(477.5);

        $entity->setBf92(65.064);
        $entity->setGas92(8.089);
        $entity->setWater92(74.332);
        $entity->setWind92(0.031);
        $entity->setSun92(0);
        $entity->setTotal92(539.939);

        $entity->setBf02(91.155);
        $entity->setGas02(9.324);
        $entity->setWater02(66.358);
        $entity->setWind02(0.608);
        $entity->setSun02(0);
        $entity->setTotal02(589.971);

        $entity->setBf12(128.489);
        $entity->setGas12(11.834);
        $entity->setWater12(78.939);
        $entity->setWind12(7.165);
        $entity->setSun12(0.019);
        $entity->setTotal12(576.241);

        $entity->setBf22(153.523);
        $entity->setGas22(8.887);
        $entity->setWater22(69.808);
        $entity->setWind22(33.060);
        $entity->setSun22(1.965);
        $entity->setTotal22(518.112);

    }

    /**
     * Get data for year 1972.
     * @param array<int|string, \Caas23\Entity\EnergySupply> $data
     * @return array<int, float|null>
     */
    public function get72(array $data): array
    {
        $total = [];
        foreach ($data as $d) {
            $total = [
                $d->getBf72(),
                $d->getGas72(),
                $d->getWater72(),
                $d->getWind72(),
                $d->getSun72(),
                $d->getTotal72(),
            ];
        }
        return $total;
    }

    /**
     * Get data for year 1982.
     * @param array<int|string, \Caas23\Entity\EnergySupply> $data
     * @return array<int, float|null>
     */
    public function get82(array $data): array
    {
        $total = [];
        foreach ($data as $d) {
            $total = [
                $d->getBf82(),
                $d->getGas82(),
                $d->getWater82(),
                $d->getWind82(),
                $d->getSun82(),
                $d->getTotal82(),
            ];
        }
        return $total;
    }

    /**
     * Get data for year 1992.
     * @param array<int|string, \Caas23\Entity\EnergySupply> $data
     * @return array<int, float|null>
     */
    public function get92(array $data): array
    {
        $total = [];
        foreach ($data as $d) {
            $total = [
                $d->getBf92(),
                $d->getGas92(),
                $d->getWater92(),
                $d->getWind92(),
                $d->getSun92(),
                $d->getTotal92(),
            ];
        }
        return $total;
    }

    /**
     * Get data for year 2002.
     * @param array<int|string, \Caas23\Entity\EnergySupply> $data
     * @return array<int, float|null>
     */
    public function get02(array $data): array
    {
        $total = [];
        foreach ($data as $d) {
            $total = [
                $d->getBf02(),
                $d->getGas02(),
                $d->getWater02(),
                $d->getWind02(),
                $d->getSun02(),
                $d->getTotal02(),
            ];
        }
        return $total;
    }

    /**
     * Get data for year 2012.
     * @param array<int|string, \Caas23\Entity\EnergySupply> $data
     * @return array<int, float|null>
     */
    public function get12(array $data): array
    {
        $total = [];
        foreach ($data as $d) {
            $total = [
                $d->getBf12(),
                $d->getGas12(),
                $d->getWater12(),
                $d->getWind12(),
                $d->getSun12(),
                $d->getTotal12(),
            ];
        }
        return $total;
    }

    /**
     * Get data for year 2022.
     * @param array<int|string, \Caas23\Entity\EnergySupply> $data
     * @return array<int, float|null>
     */
    public function get22(array $data): array
    {
        $total = [];
        foreach ($data as $d) {
            $total = [
                $d->getBf22(),
                $d->getGas22(),
                $d->getWater22(),
                $d->getWind22(),
                $d->getSun22(),
                $d->getTotal22(),
            ];
        }
        return $total;
    }

    /**
     * Get data for all years.
     * @param array<int|string, \Caas23\Entity\EnergySupply> $data
     * @return array<string, float|null>
     */
    public function getAll(array $data): array
    {
        $total = [];
        foreach ($data as $d) {
            $total = [
                'bf_72' => $d->getBf72(),
                'bf_82' => $d->getBf82(),
                'bf_92' => $d->getBf92(),
                'bf_02' => $d->getBf02(),
                'bf_12' => $d->getBf12(),
                'bf_22' => $d->getBf22(),

                'gas_72' => $d->getGas72(),
                'gas_82' => $d->getGas82(),
                'gas_92' => $d->getGas92(),
                'gas_02' => $d->getGas02(),
                'gas_12' => $d->getGas12(),
                'gas_22' => $d->getGas22(),

                'water_72' => $d->getWater72(),
                'water_82' => $d->getWater82(),
                'water_92' => $d->getWater92(),
                'water_02' => $d->getWater02(),
                'water_12' => $d->getWater12(),
                'water_22' => $d->getWater22(),

                'wind_72' => $d->getWind72(),
                'wind_82' => $d->getWind82(),
                'wind_92' => $d->getWind92(),
                'wind_02' => $d->getWind02(),
                'wind_12' => $d->getWind12(),
                'wind_22' => $d->getWind22(),

                'sun_72' => $d->getSun72(),
                'sun_82' => $d->getSun82(),
                'sun_92' => $d->getSun92(),
                'sun_02' => $d->getSun02(),
                'sun_12' => $d->getSun12(),
                'sun_22' => $d->getSun22(),

                'total_72' => $d->getTotal72(),
                'total_82' => $d->getTotal82(),
                'total_92' => $d->getTotal92(),
                'total_02' => $d->getTotal02(),
                'total_12' => $d->getTotal12(),
                'total_22' => $d->getTotal22(),
            ];
        }
        return $total;
    }
}
