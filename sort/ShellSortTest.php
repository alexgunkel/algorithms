<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 12.03.18
 * Time: 22:01
 */

namespace Alex\Sort;


class ShellSortTest extends AbstractTestCase
{
    protected function getFixture(): Sorter
    {
        return new ShellSort;
    }
}