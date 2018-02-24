<?php

namespace spec\JM\PHPKata\JM\PHPKata;

use JM\PHPKata\FizzBuzz;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FizzBuzzSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(FizzBuzz::class);
    }

    function it_should_return_1_if_passed_1() {
        $this->execute(1)->shouldReturn(1);
    }

    function it_should_return_2_if_passed_2() {
        $this->execute(2)->shouldReturn(2);
    }

    function it_should_return_fizz_if_passed_the_number_can_be_devided_by_3() {
        $this->execute(3)->shouldReturn('fizz');
    }

    function it_should_return_4_if_passed_4() {
        $this->execute(4)->shouldReturn(4);
    }

    function it_should_return_fizz_if_passed_123() {
        $this->execute(123)->shouldReturn('fizz');
    }

    function it_should_return_buzz_if_passed_the_number_can_be_devided_by_5() {
        $this->execute(5)->shouldReturn('buzz');
    }

    function it_should_return_fizzbuzz_if_passed_the_number_can_be_devided_by_3_and_5() {
        $this->execute(15)->shouldReturn('fizzbuzz');
    }
}
