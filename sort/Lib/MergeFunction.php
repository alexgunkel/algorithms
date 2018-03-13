<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 12.03.18
 * Time: 22:34
 */

namespace Alex\Sort\Lib;


trait MergeFunction
{
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