<?php

class LengthAndDistance
{
    // values are in meter.
    private $units = [
        'meter' => 1,
        'kilometer' => 1000,
        'centimeter' => 0.01,
        'millimeter' => 0.001,
        'mile' => 1609.34,
        'yard' => 0.9144,
        'foot' => 0.3048,
        'inch' => 0.0254,
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
