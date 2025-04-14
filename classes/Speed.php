<?php

class Speed
{
    // values are in m/s.
    private $units = [
        'meter_per_second' => 1,
        'kilometer_per_hour' => 0.277778,
        'mile_per_hour' => 0.44704,
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
