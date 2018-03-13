<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 08.03.18
 * Time: 07:58
 */

namespace Alex\Sort;


use Alex\Sort\Lib\ChangePositions;

class InsertionSort implements Sorter
{
    use ChangePositions;

    public function __invoke(array &$sortables): void
    {
        $length = count($sortables);
        for ($i = 1; $i < $length; $i++) {
            for ($j = $i; $j > 0; $j--) {
                if ($sortables[$j] < $sortables[$j-1]) {
                    $this->changePositions($sortables, $j, $j-1);
                }
            }
        }
    }
}