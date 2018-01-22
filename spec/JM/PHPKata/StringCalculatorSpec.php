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
}
