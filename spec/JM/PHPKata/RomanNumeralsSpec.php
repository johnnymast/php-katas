<?php

namespace spec\JM\PHPKata\JM\PHPKata;

use JM\PHPKata\RomanNumerals;
use PhpSpec\ObjectBehavior;

class RomanNumeralsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(RomanNumerals::class);
    }

    function it_should_translate_to_number()
    {
        $this->toNumber('MCMXCIX')->shouldBe(1999);
    }

    function it_should_throw_invalidargument_exceptions_when_passing_invalid_nummerals() {
        $this->shouldThrow('\InvalidArgumentException')->during('toNumber', ['MCM.XCIX']);
    }


    function it_should_translate_to_nummerals()
    {

        $this->toNumeral(100)->shouldBe('C');
    }

    function it_should_throw_and_invalidargument_exception_when_using_invalid_numbers() {
        $this->shouldThrow('\InvalidArgumentException')->during('toNumeral', ['2.2']);
    }
}
