<?php

namespace spec\JM\PHPKata\JM\PHPKata;

use JM\PHPKata\AnagramWord;
use PhpSpec\ObjectBehavior;

class AnagramWordSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith("_WORD_");
        $this->shouldHaveType(AnagramWord::class);

    }

    function it_should_return_the_origional_word() {
        $this->beConstructedWith("_MY_WORD_");
        $this->getOriginal()->shouldReturn("_MY_WORD_");
    }

    function it_should_return_the_word_to_lowercase() {
        $this->beConstructedWith('HASH');
        $this->getLowercase()->shouldReturn('hash');
    }

    function it_should_return_the_transformed_string() {
        $this->beConstructedWith('HASH');
        $this->getTransformed()->shouldReturn("97_104_104_115");
    }

    function it_outputs_converted_hash()
    {
        $this->beConstructedWith('HASH');

        // 104 h
        // 97 a
        // 115 s
        // 104 h
        // source string = 97_104_104_115

        $this->getHash()->shouldReturn('74cf25cb6c805a2f1cc011b8a2bf9db9c7086d82');
    }

 }
