<?php

class VolumeAndCapacity
{
    // values are in liter.
    private $units = [
        'liter' => 1,
        'milliliter' => 0.001,
        'gallon' => 4.54609,
        'cubic_meter' => 1000,
        'cubic_inch' => 0.0163871,
        'cubic_foot' => 28.31690879986443
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
