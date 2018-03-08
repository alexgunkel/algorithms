<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 07.03.18
 * Time: 22:08
 */
namespace Alex\Sort;

class SelectSort implements Sorter
{
    private $output = array();

    public function __invoke(array $sortables): array
    {
        $boundary = count($sortables);
        while (0 < $boundary--) {
            $this->output[] = $this->extractSmallest($sortables);
        }

        return $this->output;
    }

    private function extractSmallest(array &$sortables)
    {
        $minimum = INF;
        $smallest = null;
        foreach ($sortables as $key => $value) {
            if ($value < $minimum) {
                $smallest = $key;
                $minimum = $value;
            }
        }

        unset($sortables[$smallest]);
        return $minimum;
    }
}
