<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 08.03.18
 * Time: 22:58
 */

namespace Alex\Sort;


class SelectSortTest extends AbstractTestCase
{
    protected function getFixture(): Sorter
    {
        return new SelectSort;
    }
}