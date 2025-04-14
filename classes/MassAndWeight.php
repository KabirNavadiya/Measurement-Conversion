<?php

class MassAndWeight
{
    // values are in kilograms.
    private $units = [
        'kilogram' => 1,
        'gram' => 0.001,
        'tonne' => 1000,
        'milligram' => 0.000001,
        'microgram' => 0.000000001,
        'pound' => 0.453592
    ];

    public function convert($value, $from, $to)
    {
        if (!isset($this->units[$from]) || !isset($this->units[$to])) {
            return "Invalid Unit";
        }
        $ans = $value * $this->units[$from];
        return $ans / $this->units[$to];
    }

    public function getUnits()
    {
        return array_keys($this->units);
    }
}
