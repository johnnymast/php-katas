<?php

namespace JM\PHPKata;

/**
 * RomanNumerals class
 */
class RomanNumerals
{
    /**
     * Roman Numeral lookup table.
     *
     * @var array
     */
    protected $lookup = [
        1000 => 'M',
        900 => 'CM',
        500 => 'D',
        400 => 'CD',
        100 => 'C',
        90 => 'XC',
        50 => 'L',
        40 => 'XL',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I',
    ];

    /**
     * Convert any given decimal number into RomanNumerals.
     *
     * @param $glyphs
     * @param int $solution
     *
     * @return int
     */
    public function toNumber($glyphs, $solution = 0)
    {
        $glyphs = strtoupper($glyphs);
        $flipped = array_flip($this->lookup);

        $invalid = array_filter(str_split($glyphs), function ($glyph) use ($flipped) {
            return (isset($flipped[$glyph]) == false);
        });

        /**
         * Throw InvalidArgumentException if we find any unknown characters
         * in the $glyphs string. It Would not be a valid representation if
         * we would give back 1900 when we pass MCM.XCIX to the function.
         */
        if (count($invalid) > 0) {
            throw new \InvalidArgumentException('Non valid characters found in \'' . $glyphs . '\'');
        }

        do {
            $break = true;

            foreach ($flipped as $numeral => $value) {
                $len = strlen($numeral);

                if (substr($glyphs, 0, $len) == $numeral) {
                    $solution += $value;
                    $glyphs = substr($glyphs, $len);
                    $break = false;
                }
            }

            if (strlen($glyphs) === 0) {
                $break = true;
            }
        } while ($break === false);

        /**
         * If there are characters remaining or the solution is 0
         * it means we fail and not all could be parsed.
         *
         * BTW: Romans did not have the number 0 so the
         * solution would be invalid.
         *
         */
        if (strlen($glyphs) > 0 || $solution == 0) {
            throw new \InvalidArgumentException('Failed to parse the numerals');
        }

        return $solution;
    }

    /**
     * Convert RomanNumerals into a decimal number.
     *
     * @param $number
     * @param string $solution
     *
     * @return string
     */
    public function toNumeral($number, $solution = '')
    {
        if ($number <= 0 || is_int($number) == false) {
            throw new \InvalidArgumentException('Invalid number');
        }

        foreach ($this->lookup as $limit => $glyph) {
            while ($number >= $limit) {
                $solution .= $glyph;
                $number -= $limit;
            }
        }

        return $solution;
    }
}
