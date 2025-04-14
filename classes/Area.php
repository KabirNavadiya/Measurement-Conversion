<?php

class Area{
    private $units = [
        'square_meter' => 1,
        'square_kilometer' => 1000000,
        'hectare' => 10000,
        'acre' => 4046.86,
        'square_mile' => 2589988.11,
        'square_yard' => 0.836127,
        'square_foot' => 0.092903,
        'square_inch' => 0.00064516,
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