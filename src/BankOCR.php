<?php declare(strict_types=1);

namespace JM\PHPKata;

use JM\PHPKata\Extras\Character;

class BankOCR
{
    /**
     * The file that will be read.
     *
     * @var string
     */
    protected $file = '';

    /**
     * The path to the files.
     *
     * @var string
     */
    protected $path = '';

    /**
     * The translation table.
     *
     * @var array
     */
    protected $table = [
        '0' => [
            [' ', '_', ' '],
            ['|', ' ', '|'],
            ['|', '_', '|'],
        ],

        '1' => [
            [' ', ' ', ' '],
            [' ', ' ', '|'],
            [' ', ' ', '|'],
        ],
        '2' => [
            [' ', '_', ' '],
            [' ', '_', '|'],
            ['|', '_', ' '],
        ],

        '3' => [
            [' ', '_', ' '],
            [' ', '_', '|'],
            [' ', '_', '|'],
        ],

        '4' => [
            [' ', ' ', ' '],
            ['|', '_', '|'],
            [' ', ' ', '|'],
        ],

        '5' => [
            [' ', '_', ' '],
            ['|', '_', ' '],
            [' ', '_', '|'],
        ],

        '6' => [
            [' ', '_', ' '],
            ['|', '_', ' '],
            ['|', '_', '|'],
        ],

        '7' => [
            [' ', '_', ' '],
            [' ', ' ', '|'],
            [' ', ' ', '|'],
        ],

        '8' => [
            [' ', '_', ' '],
            ['|', '_', '|'],
            ['|', '_', '|'],
        ],

        '9' => [
            [' ', '_', ' '],
            ['|', '_', '|'],
            [' ', '_', '|'],
        ],
    ];

    /**
     * BankOCR constructor.
     *
     * @param string $file
     */
    public function __construct()
    {
        $this->path = dirname(__FILE__).'/../data/BankOCR/fixtures';
    }

    public function readFile($file = '')
    {

        $this->file = $file;

        $handle = fopen($this->path.'/'.$this->file, "r");
        $contents = fread($handle, filesize($this->path.'/'.$this->file));
        fclose($handle);

        // Parse the lines
        $lines = explode("\n", $contents);

        $characters = [];
        if (count($lines) > 0) {
            foreach ($lines as $line => $row) {
                for ($position = 0, $char = 0; $position < strlen($row); $position += 3, $char++) {
                    $str = substr($row, $position, 3);
                    $characters[$char][] = str_split($str);
                }
            }
        }

        $result = '';
        for ($i = 0; $i < count($characters); $i++) {
            $key = array_search($characters[$i], $this->table);

            if ($key !== false) {
                $result .= $key;
            }
        }

        return $result;
    }
}
