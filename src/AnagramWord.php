<?php

namespace JM\PHPKata;

class AnagramWord
{
    protected string $original = '';
    protected string $lowercase = '';
    protected string $transformed = '';
    protected string $hash = '';

    /**
     *
     * @param string $word The work to analyze
     */
    public function __construct(string $word)
    {
        $this->original = $word;
        $this->lowercase = strtolower($word);

        $characters = str_split($this->lowercase);
        $transformed = array_map(function ($c) {
            return ord($c);
        }, $characters);

        sort($transformed);

        $this->transformed = implode('_', $transformed);
        $this->hash = sha1($this->transformed);
    }

    public function getLowercase(): string
    {
        return $this->lowercase;
    }

    public function getTransformed(): string
    {
        return $this->transformed;
    }

    /**
     * @return string
     */
    public function getOriginal(): string
    {
        return $this->original;
    }

    public function getHash()
    {
        return $this->hash;
    }
}
