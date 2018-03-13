<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 12.03.18
 * Time: 21:59
 */

namespace Alex\Sort\Lib;


trait ChangePositions
{
    /**
     * @param array $sortables
     * @param int $posOne
     * @param int $posTwo
     *
     * @return void
     */
    private function changePositions(array &$sortables, int $posOne, int $posTwo): void
    {
        $tmp = $sortables[$posOne];
        $sortables[$posOne] = $sortables[$posTwo];
        $sortables[$posTwo] = $tmp;
    }
}