<?php

namespace JM\PHPKata;

class Anagrams
{
    private string $path = __DIR__ . '/../data/Anagrams/wordlist/';
    private array $analyzed = [];
    private array $words = [];

    public function __construct()
    {
        ini_set('memory_limit',-1);
    }

    /**
     * @param string $file
     *
     * @return \JM\PHPKata\Anagrams
     */
    public function analyse(string $file = ''): Anagrams
    {
        $this->file = $file;
        $fullPath = $this->path . '/' . $this->file;
        $size = filesize($fullPath) || 1;


        $contents = file_get_contents($fullPath);

        // Parse the lines
        $lines = explode("\n", $contents);
        foreach ($lines as $line) {
            $str = trim($line);
            $word = new AnagramWord($str);
            $this->words[] = $word;
            $hash = $word->getHash();

            if (isset($this->analyzed[$hash]) === false) {
                $this->analyzed[$hash] = [];
            }

            $this->analyzed[$hash][] = $word;
        }

        return $this;
    }

    public function wordCount(): int
    {
        return count($this->words);
    }

    public function getAnagramsForWord(string $word)
    {
        $word = trim($word);
        $instance = new AnagramWord($word);
        $hash = $instance->getHash();

        if ($hash) {
            $words = [];

            if (isset($this->analyzed[$hash]) === true) {
                $words = $this->analyzed[$hash];
            }
            $anagrams = [];
            foreach($words as $anagram) {
                $anagrams[] = $anagram->getOriginal();
            }

            return $anagrams;
        }
        return [];
    }
}
