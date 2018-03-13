<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 13.03.18
 * Time: 22:55
 */

namespace Alex\Sort;


class InPlaceMergeSortTest extends AbstractTestCase
{
    protected function getFixture(): Sorter
    {
        return new InPlaceMergeSort;
    }
}