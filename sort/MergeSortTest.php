<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 08.03.18
 * Time: 23:00
 */

namespace Alex\Sort;


class MergeSortTest extends AbstractTestCase
{
    protected function getFixture(): Sorter
    {
        return new MergeSort;
    }
}