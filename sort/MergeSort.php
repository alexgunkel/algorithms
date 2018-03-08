<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 08.03.18
 * Time: 22:59
 */

namespace Alex\Sort;


class MergeSort implements Sorter
{
    /**
     * @param array $sortables
     * @return array
     */
    public function __invoke(array $sortables): array
    {
        return $this->sort($sortables);
    }

    /**
     * Basic sorting method
     *
     * @param array $sortables
     *
     * @return array
     */
    private function sort(array $sortables): array
    {
        $length = count($sortables);
        if ($length === 1) {
            return $sortables;
        }

        $length /= 2;
        return $this->merge(
            $this->sort(array_slice($sortables, 0, $length)),
            $this->sort(array_slice($sortables, $length))
        );
    }

    /**
     * @param array $partOne
     * @param array $partTwo
     * @return array
     */
    private function merge(array $partOne, array $partTwo): array
    {
        $output = [];
        $lengthOne = count($partOne);
        $lengthTwo = count($partTwo);

        while ($lengthOne || $lengthTwo) {
            if (0 === $lengthTwo || (0 !== $lengthOne && reset($partOne) <= reset($partTwo))) {
                $output[] = array_shift($partOne);
                $lengthOne--;
            } else {
                $output[] = array_shift($partTwo);
                $lengthTwo--;
            }
        }

        return $output;
    }
}