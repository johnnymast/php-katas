<?php declare(strict_types=1);

namespace JM\PHPKata\Extras;

/**
 * Class Character
 *
 * @package JM\PHPKata\Extras
 */
class Character
{
    /**
     * @var array
     */
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

    /**
     * Create a string output.
     *
     * @return string
     */
    public function asString(): string
    {
        $out = '';
        foreach ($this->matrix as $index => $row) {
            foreach ($row as $cell) {
                $out .= $cell;
            }
            $out .= "\n";
        }

        return $out;
    }

    /**
     * Return the matrix as a string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->asString();
    }
}
