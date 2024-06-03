<?php

namespace Caas23\Project;

use Caas23\Entity\DeceasedGeneral;

/**
 * DeceasedGeneralFunctions class.
 */
class DeceasedGeneralFunctions
{
    public function add(DeceasedGeneral $entity): void
    {
        $entity->setTotal17(88516);
        $entity->setMen17(42615);
        $entity->setWomen17(45901);

        $entity->setTotal18(88831);
        $entity->setMen18(43268);
        $entity->setWomen18(45563);

        $entity->setTotal19(85646);
        $entity->setMen19(42008);
        $entity->setWomen19(43638);

        $entity->setTotal20(94905);
        $entity->setMen20(47328);
        $entity->setWomen20(47577);

        $entity->setTotal21(88756);
        $entity->setMen21(44430);
        $entity->setWomen21(44326);

        $entity->setTotal22(91616);
        $entity->setMen22(45452);
        $entity->setWomen22(46164);

        $entity->setTotal23(91195);
        $entity->setMen23(45438);
        $entity->setWomen23(45757);
    }

    /**
     * Get data for all years.
     * @param array<int|string, \Caas23\Entity\DeceasedGeneral> $data
     * @return array<string, int|null>
     */
    public function getAll(array $data): array
    {
        $total = [];
        foreach ($data as $d) {
            $total = [
                'Total_17' => $d->getTotal17(),
                'Man_17' => $d->getMen17(),
                'Kvinnor_17' => $d->getWomen17(),

                'Total_18' => $d->getTotal18(),
                'Man_18' => $d->getMen18(),
                'Kvinnor_18' => $d->getWomen18(),

                'Total_19' => $d->getTotal19(),
                'Man_19' => $d->getMen19(),
                'Kvinnor_19' => $d->getWomen19(),

                'Total_20' => $d->getTotal20(),
                'Man_20' => $d->getMen20(),
                'Kvinnor_20' => $d->getWomen20(),

                'Total_21' => $d->getTotal21(),
                'Man_21' => $d->getMen21(),
                'Kvinnor_21' => $d->getWomen21(),

                'Total_22' => $d->getTotal22(),
                'Man_22' => $d->getMen22(),
                'Kvinnor_22' => $d->getWomen22(),

                'Total_23' => $d->getTotal23(),
                'Man_23' => $d->getMen23(),
                'Kvinnor_23' => $d->getWomen23(),
            ];
        }
        return $total;
    }

    /**
     * Get total data.
     * @param array<int|string, \Caas23\Entity\DeceasedGeneral> $data
     * @return array<int, int|null>
     */
    public function getTotal(array $data): array
    {
        $total = [];
        foreach ($data as $d) {
            $total = [
                $d->getTotal17(),
                $d->getTotal18(),
                $d->getTotal19(),
                $d->getTotal20(),
                $d->getTotal21(),
                $d->getTotal22(),
                $d->getTotal23(),
            ];
        }
        return $total;
    }

    /**
     * Get data for men.
     * @param array<int|string, \Caas23\Entity\DeceasedGeneral> $data
     * @return array<int, int|null>
     */
    public function getMen(array $data): array
    {
        $men = [];
        foreach ($data as $d) {
            $men = [
                $d->getMen17(),
                $d->getMen18(),
                $d->getMen19(),
                $d->getMen20(),
                $d->getMen21(),
                $d->getMen22(),
                $d->getMen23(),
            ];
        }
        return $men;
    }

    /**
     * Get data for women.
     * @param array<int|string, \Caas23\Entity\DeceasedGeneral> $data
     * @return array<int, int|null>
     */
    public function getWomen(array $data): array
    {
        $women = [];
        foreach ($data as $d) {
            $women = [
                $d->getWomen17(),
                $d->getWomen18(),
                $d->getWomen19(),
                $d->getWomen20(),
                $d->getWomen21(),
                $d->getWomen22(),
                $d->getWomen23(),
            ];
        }
        return $women;
    }
}
