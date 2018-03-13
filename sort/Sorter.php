<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 07.03.18
 * Time: 22:36
 */

namespace Alex\Sort;


interface Sorter
{
    public function __invoke(array &$sortables): void ;
}