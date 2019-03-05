<?php

namespace spec\JM\PHPKata\JM\PHPKata\Extras;

use JM\PHPKata\Extras\Character;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CharacterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Character::class);
    }

    function it_as_in_zero_should_be_recognized()
    {
        $expected = ' _ '."\n";
        $expected .= '| |'."\n";
        $expected .= '|_|'."\n";

        $this->beConstructedWith([
            [' ', '_', ' '],
            ['|', ' ', '|'],
            ['|', '_', '|'],
        ]);

        //echo "\n";
        //echo "$expected\n"; exit;

        $this->asString()->shouldContain($expected);
    }

    function it_as_in_one_should_be_recognized()
    {
        $expected = '   '."\n";
        $expected .= '  |'."\n";
        $expected .= '  |'."\n";

        $this->beConstructedWith([
            [' ', ' ', ' '],
            [' ', ' ', '|'],
            [' ', ' ', '|'],
        ]);

        $this->asString()->shouldContain($expected);
    }

    function it_as_in_two_should_be_recognized()
    {
        $expected = ' _ '."\n";
        $expected .= ' _|'."\n";
        $expected .= '|_ '."\n";

        $this->beConstructedWith([
            [' ', '_', ' '],
            [' ', '_', '|'],
            ['|', '_', ' '],
        ]);

        $this->asString()->shouldContain($expected);
    }

    function it_as_in_three_should_be_recognized()
    {
        $expected = ' _ '."\n";
        $expected .= ' _|'."\n";
        $expected .= ' _|'."\n";

        $this->beConstructedWith([
            [' ', '_', ' '],
            [' ', '_', '|'],
            [' ', '_', '|'],
        ]);

        $this->asString()->shouldContain($expected);
    }

    function it_as_in_four_should_be_recognized()
    {
        $expected = '   '."\n";
        $expected .= '|_|'."\n";
        $expected .= '  |'."\n";

        $this->beConstructedWith([
            [' ', ' ', ' '],
            ['|', '_', '|'],
            [' ', ' ', '|'],
        ]);

        $this->asString()->shouldContain($expected);
    }

    function it_as_in_five_should_be_recognized()
    {
        $expected = ' _ '."\n";
        $expected .= '|_ '."\n";
        $expected .= ' _|'."\n";

        $this->beConstructedWith([
            [' ', '_', ' '],
            ['|', '_', ' '],
            [' ', '_', '|'],
        ]);

        $this->asString()->shouldContain($expected);
    }

    function it_as_in_six_should_be_recognized()
    {
        $expected = ' _ '."\n";
        $expected .= '|_ '."\n";
        $expected .= '|_|'."\n";

        $this->beConstructedWith([
            [' ', '_', ' '],
            ['|', '_', ' '],
            ['|', '_', '|'],
        ]);

        $this->asString()->shouldContain($expected);
    }

    function it_as_in_seven_should_be_recognized()
    {
        $expected = ' _ '."\n";
        $expected .= '  |'."\n";
        $expected .= '  |'."\n";

        $this->beConstructedWith([
            [' ', '_', ' '],
            [' ', ' ', '|'],
            [' ', ' ', '|'],
        ]);

        $this->asString()->shouldContain($expected);
    }

    function it_as_in_eight_should_be_recognized()
    {
        $expected  = ' _ '."\n";
        $expected .= '|_|'."\n";
        $expected .= '|_|'."\n";

        $this->beConstructedWith([
            [' ', '_', ' '],
            ['|', '_', '|'],
            ['|', '_', '|'],
        ]);

        $this->asString()->shouldContain($expected);
    }

    function it_as_in_nine_should_be_recognized()
    {
        $expected = ' _ '."\n";
        $expected .= '|_|'."\n";
        $expected .= ' _|'."\n";

        $this->beConstructedWith([
            [' ', '_', ' '],
            ['|', '_', '|'],
            [' ', '_', '|'],
        ]);

        $this->asString()->shouldContain($expected);
    }
}
