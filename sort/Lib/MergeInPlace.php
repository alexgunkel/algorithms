<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 13.03.18
 * Time: 22:52
 */

namespace Alex\Sort\Lib;


trait MergeInPlace
{
    /**
     * @param array $sortables
     * @param int $low
     * @param int $middle
     * @param int $high
     */
    private function merge(array &$sortables, int $low, int $middle, int $high): void
    {
        $lowerUpperBoundary = $middle-1;
        $i = $low;

        while ($low <= $lowerUpperBoundary && $middle <= $high) {
            if ($middle > $high || $sortables[$low] <= $sortables[$middle]) {
                $i++;
                $low++;
            } else {
                $tmp = $sortables[$middle];
                for ($j = $middle; $j > $low; $j--) {
                    $sortables[$j] = $sortables[$j-1];
                }
                $sortables[$low++] = $tmp;
                $middle++;
                $lowerUpperBoundary++;
            }
        }
    }
}