<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 12.03.18
 * Time: 22:01
 */

namespace Alex\Sort;


use Alex\Sort\Lib\ChangePositions;

class ShellSort implements Sorter
{
    use ChangePositions;

    public function __invoke(array &$sortables): void
    {
        $length = count($sortables);
        $startingPoint = 1;

        while ($startingPoint < $length/3) {
            $startingPoint = $startingPoint * 3 + 1;
        }

        while ($startingPoint > 0) {
            for ($i = $startingPoint; $i < $length; $i++) {
                for ($j = $i; $j >= $startingPoint &&  $sortables[$j - $startingPoint] > $sortables[$j]; $j -= $startingPoint) {
                    $this->changePositions($sortables, $j - $startingPoint, $j);
                }
            }

            $startingPoint = floor($startingPoint / 3);
        }
    }
}