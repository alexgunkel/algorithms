<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 08.03.18
 * Time: 07:58
 */

namespace Alex\Sort;


class InsertionSort implements Sorter
{
    public function __invoke(array $sortables): array
    {
        $output = array();
        $lengthOfOutput = 0;
        foreach ($sortables as $element) {
            $max = $lengthOfOutput;
            while (0 < $max && $output[$max - 1] > $element) {
                $output[$max] = $output[$max - 1];
                $max--;
            }

            $output[$max] = $element;
            $lengthOfOutput++;
        }

        return $output;
    }
}