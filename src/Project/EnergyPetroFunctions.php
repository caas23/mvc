<?php

namespace Caas23\Project;

use Caas23\Entity\EnergyPetro;

/**
 * EnergyPetroFunctions class.
 */
class EnergyPetroFunctions
{
    public function add(EnergyPetro $entity): void
    {
        $entity->setInd87(27.023);
        $entity->setTr87(78.750);
        $entity->setHo87(27.395);
        $entity->setTotal87(153.746);

        $entity->setInd92(17.396);
        $entity->setTr92(74.405);
        $entity->setHo92(21.307);
        $entity->setTotal92(129.563);

        $entity->setInd97(25.778);
        $entity->setTr97(73.147);
        $entity->setHo97(18.495);
        $entity->setTotal97(132.341);

        $entity->setInd02(18.987);
        $entity->setTr02(82.208);
        $entity->setHo02(11.778);
        $entity->setTotal02(127.488);

        $entity->setInd07(15.784);
        $entity->setTr07(83.561);
        $entity->setHo07(5.370);
        $entity->setTotal07(118.023);

        $entity->setInd12(11.839);
        $entity->setTr12(75.063);
        $entity->setHo12(3.002);
        $entity->setTotal12(100.857);

        $entity->setInd17(9.459);
        $entity->setTr17(68.247);
        $entity->setHo17(2.145);
        $entity->setTotal17(87.812);

        $entity->setInd22(8.553);
        $entity->setTr22(53.742);
        $entity->setHo22(1.738);
        $entity->setTotal22(70.809);
    }

    /**
     * Get data for year 1987.
     * @param array<int|string, \Caas23\Entity\EnergyPetro> $data
     * @return array<int, float|null>
     */
    public function get87(array $data): array
    {
        $total = [];
        foreach ($data as $d) {
            $total = [
                $d->getInd87(),
                $d->getTr87(),
                $d->getHo87(),
                $d->getTotal87(),
            ];
        }
        return $total;
    }

    /**
     * Get data for year 1992.
     * @param array<int|string, \Caas23\Entity\EnergyPetro> $data
     * @return array<int, float|null>
     */
    public function get92(array $data): array
    {
        $total = [];
        foreach ($data as $d) {
            $total = [
                $d->getInd92(),
                $d->getTr92(),
                $d->getHo92(),
                $d->getTotal92(),
            ];
        }
        return $total;
    }

    /**
     * Get data for year 1997.
     * @param array<int|string, \Caas23\Entity\EnergyPetro> $data
     * @return array<int, float|null>
     */
    public function get97(array $data): array
    {
        $total = [];
        foreach ($data as $d) {
            $total = [
                $d->getInd97(),
                $d->getTr97(),
                $d->getHo97(),
                $d->getTotal97(),
            ];
        }
        return $total;
    }

    /**
     * Get data for year 200222.
     * @param array<int|string, \Caas23\Entity\EnergyPetro> $data
     * @return array<int, float|null>
     */
    public function get02(array $data): array
    {
        $total = [];
        foreach ($data as $d) {
            $total = [
                $d->getInd02(),
                $d->getTr02(),
                $d->getHo02(),
                $d->getTotal02(),
            ];
        }
        return $total;
    }

    /**
     * Get data for year 2007.
     * @param array<int|string, \Caas23\Entity\EnergyPetro> $data
     * @return array<int, float|null>
     */
    public function get07(array $data): array
    {
        $total = [];
        foreach ($data as $d) {
            $total = [
                $d->getInd07(),
                $d->getTr07(),
                $d->getHo07(),
                $d->getTotal07(),
            ];
        }
        return $total;
    }

    /**
     * Get data for year 2012.
     * @param array<int|string, \Caas23\Entity\EnergyPetro> $data
     * @return array<int, float|null>
     */
    public function get12(array $data): array
    {
        $total = [];
        foreach ($data as $d) {
            $total = [
                $d->getInd12(),
                $d->getTr12(),
                $d->getHo12(),
                $d->getTotal12(),
            ];
        }
        return $total;
    }

    /**
     * Get data for year 2017.
     * @param array<int|string, \Caas23\Entity\EnergyPetro> $data
     * @return array<int, float|null>
     */
    public function get17(array $data): array
    {
        $total = [];
        foreach ($data as $d) {
            $total = [
                $d->getInd17(),
                $d->getTr17(),
                $d->getHo17(),
                $d->getTotal17(),
            ];
        }
        return $total;
    }

    /**
     * Get data for year 2022.
     * @param array<int|string, \Caas23\Entity\EnergyPetro> $data
     * @return array<int, float|null>
     */
    public function get22(array $data): array
    {
        $total = [];
        foreach ($data as $d) {
            $total = [
                $d->getInd22(),
                $d->getTr22(),
                $d->getHo22(),
                $d->getTotal22(),
            ];
        }
        return $total;
    }

    /**
     * Get data for all years.
     * @param array<int|string, \Caas23\Entity\EnergyPetro> $data
     * @return array<string, float|null>
     */
    public function getAll(array $data): array
    {
        $total = [];
        foreach ($data as $d) {
            $total = [
                'ind_87' => $d->getInd87(),
                'ind_92' => $d->getInd92(),
                'ind_97' => $d->getInd97(),
                'ind_02' => $d->getInd02(),
                'ind_07' => $d->getInd07(),
                'ind_12' => $d->getInd12(),
                'ind_17' => $d->getInd17(),
                'ind_22' => $d->getInd22(),

                'tr_87' => $d->getTr87(),
                'tr_92' => $d->getTr92(),
                'tr_97' => $d->getTr97(),
                'tr_02' => $d->getTr02(),
                'tr_07' => $d->getTr07(),
                'tr_12' => $d->getTr12(),
                'tr_17' => $d->getTr17(),
                'tr_22' => $d->getTr22(),

                'ho_87' => $d->getHo87(),
                'ho_92' => $d->getHo92(),
                'ho_97' => $d->getHo97(),
                'ho_02' => $d->getHo02(),
                'ho_07' => $d->getHo07(),
                'ho_12' => $d->getHo12(),
                'ho_17' => $d->getHo17(),
                'ho_22' => $d->getHo22(),

                'tot_87' => $d->getTotal87(),
                'tot_92' => $d->getTotal92(),
                'tot_97' => $d->getTotal97(),
                'tot_02' => $d->getTotal02(),
                'tot_07' => $d->getTotal07(),
                'tot_12' => $d->getTotal12(),
                'tot_17' => $d->getTotal17(),
                'tot_22' => $d->getTotal22(),
            ];
        }
        return $total;
    }
}
