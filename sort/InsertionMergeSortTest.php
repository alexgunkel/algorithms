<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 12.03.18
 * Time: 22:32
 */

namespace Alex\Sort;


class InsertionMergeSortTest extends AbstractTestCase
{
    protected function getFixture(): Sorter
    {
        return new InsertionMergeSort;
    }
}