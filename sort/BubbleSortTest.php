<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 08.03.18
 * Time: 22:24
 */

namespace Alex\Sort;


class BubbleSortTest extends AbstractTestCase
{
    /**
     * @return Sorter
     */
    protected function getFixture(): Sorter
    {
        return new BubbleSort;
    }
}