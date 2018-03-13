<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 12.03.18
 * Time: 23:03
 */

namespace Alex\Sort;


class QuickSortTest extends AbstractTestCase
{
    protected function getFixture(): Sorter
    {
        return new QuickSort;
    }
}