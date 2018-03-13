<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 13.03.18
 * Time: 21:59
 */

namespace Alex\Sort;


class BottomUpMergeSortTest extends AbstractTestCase
{
    protected function getFixture(): Sorter
    {
        return new BottomUpMergeSort;
    }
}