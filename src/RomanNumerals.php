<?php

namespace JM\PHPKata;

class RomanNumerals
{
    /**
     * @var array
     */
    protected $lookup = [
        1000 => 'M',
        900  => 'CM',
        500  => 'D',
        400  => 'CD',
        100  => 'C',
        90   => 'XC',
        50   => 'L',
        40   => 'XL',
        10   => 'X',
        9    => 'IX',
        5    => 'V',
        4    => 'IV',
        1    => 'I'
    ];

    /**
     * @param $arg
     * @return int
     */
    public function toNumber($glyphs, $result = 0)
    {
        $flipped = array_flip($this->lookup);
        $solution = 0;

        do {
            $break = true;

            foreach($flipped as $numeral => $value) {
                $len = strlen($numeral);
                if (substr($glyphs, 0, $len) == $numeral) {
                    $solution += $value;
                    $glyphs = substr($glyphs, $len);
                    $break = false;
                }
            }

            if (strlen($glyphs) == 0) {
                $break = true;
            }


        } while ($break === false);

        /*
        while(strlen($glyphs) > 0) {

            foreach($flipped as $numeral => $value) {
                $len = strlen($numeral);
                if (substr($glyphs, 0, $len) == $numeral) {
                    $solution += $value;
                    $glyphs = substr($glyphs, $len);
                }
            }
        }
        */

        return $solution;
    }

    /**
     * @param $arg
     * @return string
     */
    public function toNumeral($number)
    {
        $this->guardAgainstInvalidNumber($number);


        $solution = '';
        foreach ($this->lookup as $limit => $glyph)
        {
            while ($number >= $limit)
            {
                $solution .= $glyph;
                $number -= $limit;
            }
        }
        return $solution;
    }


    /**
     * @param $number
     */
    private function guardAgainstInvalidNumber($number)
    {
        if ($number <= 0)
        {
            throw new InvalidArgumentException;
        }
    }
}
