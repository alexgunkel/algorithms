<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 08.03.18
 * Time: 21:35
 */

namespace Alex\Sort;


use Alex\Sort\Lib\ChangePositions;

class BubbleSort implements Sorter
{
    use ChangePositions;

    public function __invoke(array &$sortables) : void
    {
        $length = count($sortables);
        $changed = true;
        while ($changed) {
            $changed = false;
            for ($i = 1; $i <= $length-1; $i++) {
                if ($sortables[$i] < $sortables[$i-1]) {
                    $this->changePositions($sortables, $i, $i-1);
                    $changed = true;
                }
            }
        }
    }
}