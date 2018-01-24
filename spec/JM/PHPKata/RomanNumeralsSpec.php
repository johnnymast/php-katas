<?php

namespace spec\JM\PHPKata\JM\PHPKata;

use JM\PHPKata\RomanNumerals;
use PhpSpec\ObjectBehavior;

/**
 *
 * RomanNumerals specification class
 */
class RomanNumeralsSpec extends ObjectBehavior
{
    /**
     * It is initializable
     *
     * @return void
     */
    public function it_is_initializable()
    {
        $this->shouldHaveType(RomanNumerals::class);
    }

    /**
     * It should translate to number
     *
     * @return void
     */
    public function it_should_translate_to_number()
    {
        $this->toNumber('MCMXCIX')->shouldBe(1999);
    }

    /**
     * It should throw InvalidArgumentException when passing invalid numberals
     *
     * @return void
     */
    public function it_should_throw_invalidargument_exceptions_when_passing_invalid_nummerals()
    {
        $this->shouldThrow('\InvalidArgumentException')->during('toNumber', ['MCM.XCIX']);
    }

    /**
     * It should translate to nummerals
     *
     * @return void
     */
    public function it_should_translate_to_nummerals()
    {
        $this->toNumeral(100)->shouldBe('C');
    }

    /**
     * It should throw an InvalidArgumentException when using invalid numnbers
     *
     * @return void
     */
    public function it_should_throw_and_invalidargument_exception_when_using_invalid_numbers()
    {
        $this->shouldThrow('\InvalidArgumentException')->during('toNumeral', ['2.2']);
    }
}
