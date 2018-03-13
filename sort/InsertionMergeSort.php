<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 12.03.18
 * Time: 22:31
 */

namespace Alex\Sort;


use Alex\Sort\Lib\MergeFunction;

class InsertionMergeSort implements Sorter
{
    private $insertionSort;

    use MergeFunction;

    public function __construct()
    {
        $this->insertionSort = new InsertionSort;
    }

    public function __invoke(array &$sortables): void
    {
        $sortables = $this->sort($sortables);
    }

    private function sort(array $sortables) : array
    {
        $length = count($sortables);
        if ($length <= 15) {
            $this->insertionSort->__invoke($sortables);
            return $sortables;
        }

        $length /= 2;
        return $this->merge(
            $this->sort(array_slice($sortables, 0, $length)),
            $this->sort(array_slice($sortables, $length))
        );
    }
}