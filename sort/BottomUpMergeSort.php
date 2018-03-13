<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 13.03.18
 * Time: 21:58
 */

namespace Alex\Sort;


use Alex\Sort\Lib\ChangePositions;
use Alex\Sort\Lib\MergeInPlace;

class BottomUpMergeSort implements Sorter
{
    use ChangePositions,
        MergeInPlace;

    public function __invoke(array &$sortables): void
    {
        $totalLength = count($sortables);

        for ($partLength = 1; $partLength <= $totalLength; $partLength *= 2) {
            for ($i = 0; $i <= $totalLength; $i+=2*$partLength) {
                $this->merge($sortables, $i, $i+$partLength, min($i+2*$partLength - 1, $totalLength-1));
            }
        }
    }
}