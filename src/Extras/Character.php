<?php declare(strict_types=1);

namespace JM\PHPKata\Extras;

/**
 * Class Character
 *
 * @package JM\PHPKata\Extras
 */
class Character
{
    private $matrix;

    /**
     * Character constructor.
     *
     * @param array $characters
     */
    public function __construct($characters = [])
    {
        $this->matrix = [
            [' ', ' ', ' '],
            [' ', ' ', ' '],
            [' ', ' ', ' '],
            [' ', ' ', ' '],
        ];

        foreach ($this->matrix as $rowindex => $row) {
            foreach ($row as $cellindex => $cell) {
                if (isset($characters[$rowindex][$cellindex])) {
                    $this->matrix[$rowindex][$cellindex] = $characters[$rowindex][$cellindex];
                }
            }
        }
    }

    public function asString()
    {
        $out = '';
        foreach ($this->matrix as $index => $row) {
            foreach ($row as $cell) {
                $out .= $cell;
            }
            $out .=  "\n" ;
        }

        return $out;
    }

    public function __toString()
    {
        return $this->asString();
    }
}
