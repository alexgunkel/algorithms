<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 13.03.18
 * Time: 22:55
 */

namespace Alex\Sort;


use Alex\Sort\Lib\MergeInPlace;

class InPlaceMergeSort implements Sorter
{
    use MergeInPlace;

    /**
     * @param array $sortables
     * @return array
     */
    public function __invoke(array &$sortables): void
    {
        $length = count($sortables);
        $this->sort($sortables, 0, $length-1);
    }

    /**
     * Basic sorting method
     *
     * @param array $sortables
     *
     * @return array
     */
    private function sort(array &$sortables, int $start, int $end): void
    {
        if ($start >= $end) {
            return;
        }

        $middle = $start + (int) floor(($end-$start)/2);
        $this->sort($sortables, $start, $middle);
        $this->sort($sortables, $middle+1, $end);
        $this->merge($sortables, $start, $middle+1, $end);
    }
}