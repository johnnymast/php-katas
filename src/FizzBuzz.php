<?php

namespace JM\PHPKata;

class FizzBuzz
{

    /**
     * @param int $number
     * @return int|string
     */
    public function execute($number = 0)
    {
        if ($number % 3 != 0 && $number % 5 !=0) {
            return $number;
        }

        $result = [];

        if ($number % 3 == 0) $result[] = 'fizz';
        if ($number % 5 == 0) $result[] = 'buzz';

        return implode('', $result);
    }
}
