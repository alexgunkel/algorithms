<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 07.03.18
 * Time: 22:14
 */
namespace Alex\Sort;


class DataProvider
{
    public function __invoke(string $fileName): array
    {
        $file = __DIR__ . '/data/' . $fileName;
        $output = file($file);

        array_walk($output, function (&$value) {
            $value = (int) $value;
        });

        return $output;
    }
}