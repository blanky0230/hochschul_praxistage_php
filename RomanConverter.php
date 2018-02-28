<?php

class RomanConverter
{
    const DICT = [
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
        'I' => 1
    ];

    public function convert($number)
    {
        $res = '';
        while ($number > 0) {
            foreach (self::DICT as $roman => $arabic) {
                if ($number >= $arabic) {
                    $number -= $arabic;
                    $res .= $roman;
                    break;
                }
            }
        }
        return $res;
    }

}

