<?php

namespace spec\JM\PHPKata\JM\PHPKata;

use JM\PHPKata\StringCalculator;
use PhpSpec\ObjectBehavior;

/**
 * String Calculator specification class
 */
class StringCalculatorSpec extends ObjectBehavior
{
    /**
     * It is initializable
     *
     * @return void
     */
    public function it_is_initializable()
    {
        $this->shouldHaveType(StringCalculator::class);
    }

    /**
     * It as in Add would return 0 on emptry strings
     *
     * @return void
     */
    public function it_as_in_add_would_return_zero_on_empty_strings()
    {
        $this->add('')->shouldReturn(0);
    }

    /**
     * It as in Add should sum two strings
     *
     * @return void
     */
    public function it_as_in_add_should_sum_two_strings()
    {
        $this->add('1,2')->shouldReturn(3);
    }

    /**
     * It as in Add should allow diffrent delimitters
     *
     * @return void
     */
    public function it_as_in_add_should_allow_different_delimiters()
    {
        $this->add("1\n2,3")->shouldReturn(6);
    }

    /**
     * It as Add should allow non valid chars
     *
     * @return void
     */
    public function it_as_add_should_allow_non_valid_chars()
    {
        $this->add("//;\n1;2")->shouldReturn(3);
    }

    /**
     * It as in Add should throw an InvalidArgumentException on negative values
     *
     * @return void
     */
    public function it_as_in_add_should_thow_an_exception_on_negative_values()
    {
        $this->shouldThrow('\InvalidArgumentException')->during('add', ["//;\n1;2;-1"]);
    }

    /**
     * It as in add should ignore numbers larger then 1000
     *
     * @return void
     */
    public function it_as_in_add_should_ignore_numbers_larger_then_thousand()
    {
        $this->add('2;1001')->shouldReturn(2);
    }

    /**
     * It as in Add should support longer delimiters (then 1 char)
     *
     * @return void
     */
    public function it_as_in_add_should_support_longer_delimiters()
    {
        $this->add("//[***]\n1***2***3")->shouldReturn(6);
    }

    /**
     * It as in Add should support multiple delimiters of multiple lengths
     *
     * @return void
     */
    public function it_as_in_add_should_support_multiple_delimiters_of_multiple_lengths()
    {
        $this->add("//[*][%]\n1*2%3")->shouldReturn(6);
    }

    /**
     * It as in Add should support mixed delimiters of multiple lengths
     *
     * @return void
     */
    public function it_as_in_add_should_support_mixed_delimiters_of_multiple_lengths()
    {
        $this->add("//[*][%][@@@]\n1*2%3")->shouldReturn(6);
    }
}
