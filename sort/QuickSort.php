<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 12.03.18
 * Time: 23:02
 */

namespace Alex\Sort;


use Alex\Sort\Lib\ChangePositions;
use PHPUnit\Runner\Exception;

class QuickSort implements Sorter
{
    use ChangePositions;

    public function __invoke(array &$sortables): void
    {
        $length = count($sortables);
        $this->sort($sortables, 0, $length-1);
    }

    private function sort(array &$sortable, int $low, int $high): void
    {
        if ($high <= $low) {
            return;
        }

        $i = $this->partition($sortable, $low, $high);
        $this->sort($sortable, $low, $i-1);
        $this->sort($sortable, $i+1, $high);
    }

    private function partition(array &$sortables, int $low, int $high) : int
    {
        $i = $low;
        $j = $high + 1;
        $value = $sortables[$low];

        while (true) {
            while ($value > $sortables[++$i] && $i !== $high) {}
            while ($value < $sortables[--$j] && $j !== $low) {}
            if ($i >= $j) {
                break;
            }

            $this->changePositions($sortables, $i, $j);
        }

        $this->changePositions($sortables, $low, $j);
        return $j;
    }
}