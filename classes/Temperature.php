<?php

class Temperature
{
    private $units = ['celsius', 'fahrenheit', 'kelvin'];
    public function convert($value, $from, $to)
    {
        if (!in_array($from, $this->units) || !in_array($to, $this->units)) {
            return "Invalid Unit";
        }

        switch ($from) {
            case 'fahrenheit':
                $value = ($value - 32) * 5 / 9;
                break;
            case 'kelvin':
                $value = $value - 273.15;
                break;
        }

        switch ($to) {
            case 'fahrenheit':
                return ($value * 9 / 5) + 32;
            case 'kelvin':
                return $value + 273.15;
            default:
                return $value;
        }
    }

    public function getUnits()
    {
        return $this->units;
    }
}
