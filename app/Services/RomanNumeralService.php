<?php

namespace App\Services;

class RomanNumeralService
{
    private $roman_numerals_map = [
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1,
    ];

    public function romanToInt($roman)
    {
        $result = 0;
        $i = 0;
        $romanArray = str_split($roman);

        foreach ($romanArray as $key => $char) {
            if ($key + 1 < count($romanArray) && isset($this->roman_numerals_map[$romanArray[$key] . $romanArray[$key + 1]])) {
                $result += $this->roman_numerals_map[$romanArray[$key] . $romanArray[$key + 1]];
                $key++;
            } else {
                $result += $this->roman_numerals_map[$char];
            }
        }

        return $result;
    }

    public function intToRoman($integer)
    {
        $result = '';

        foreach ($this->roman_numerals_map as $roman => $value) {
            while ($integer >= $value) {
                $result .= $roman;
                $integer -= $value;
            }
        }

        return $result;
    }
}
