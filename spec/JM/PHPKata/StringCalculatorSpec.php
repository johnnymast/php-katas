<?php

namespace spec\JM\PHPKata\JM\PHPKata;

use JM\PHPKata\StringCalculator;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StringCalculatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(StringCalculator::class);
    }

    function it_als_in_add_would_return_zero_on_empty_strings()
    {
        $this->add('')->shouldReturn(0);
    }

    function it_as_in_add_should_sum_two_strings()
    {
        $this->add('1,2')->shouldReturn(3);
    }

    function it_as_add_should_allow_different_delimiters()
    {
        $this->add("1\n2,3")->shouldReturn(6);
    }

    function it_as_add_should_allow_non_valid_chars()
    {
        $this->add("//;\n1;2")->shouldReturn(3);
    }

    function it_as_add_should_thow_an_exception_on_negative_values()
    {

        $this->shouldThrow('\InvalidArgumentException')->during('add', ["//;\n1;2;-1"]);
    }

    function it_as_add_should_ignore_numbers_larger_then_thousand()
    {
        $this->add("2;1001")->shouldReturn(2);
    }

    function it_as_in_add_should_support_longer_delimiters()
    {
        $this->add("//[***]\n1***2***3")->shouldReturn(6);
    }

    function it_as_in_add_should_support_multiple_delimiters_of_multiple_lengths()
    {
        $this->add("//[*][%]\n1*2%3")->shouldReturn(6);
    }

    function it_as_in_add_should_support_mixed_delimiters_of_multiple_lengths()
    {
        $this->add("//[*][%][@@@]\n1*2%3")->shouldReturn(6);
    }
}
