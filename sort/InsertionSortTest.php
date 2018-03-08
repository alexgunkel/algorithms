<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 08.03.18
 * Time: 22:54
 */

namespace Alex\Sort;


class InsertionSortTest extends AbstractTestCase
{
    protected function getFixture(): Sorter
    {
        return new InsertionSort;
    }
}