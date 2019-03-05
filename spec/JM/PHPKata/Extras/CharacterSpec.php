<?php declare(strict_types=1);

namespace spec\JM\PHPKata\JM\PHPKata\Extras;

use JM\PHPKata\Extras\Character;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CharacterSpec extends ObjectBehavior
{
    /**
     * Check to see if the Character class
     * initializes as the right class.
     */
    function it_is_initializable()
    {
        $this->shouldHaveType(Character::class);
    }

    /**
     * Check to see if the 0 character will be constructed correctly
     * by the Character class.
     */
    function it_as_in_zero_should_be_recognized(): void
    {
        $expected = ' _ '."\n";
        $expected .= '| |'."\n";
        $expected .= '|_|'."\n";

        $this->beConstructedWith([
            [' ', '_', ' '],
            ['|', ' ', '|'],
            ['|', '_', '|'],
        ]);

        $this->asString()->shouldContain($expected);
    }

    /**
     * Check to see if the 1 character will be constructed correctly
     * by the Character class.
     */

    function it_as_in_one_should_be_recognized(): void
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

    /**
     * Check to see if the 2 character will be constructed correctly
     * by the Character class.
     */
    function it_as_in_two_should_be_recognized(): void
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

    /**
     * Check to see if the 3 character will be constructed correctly
     * by the Character class.
     */
    function it_as_in_three_should_be_recognized(): void
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

    /**
     * Check to see if the 4 character will be constructed correctly
     * by the Character class.
     */
    function it_as_in_four_should_be_recognized(): void
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

    /**
     * Check to see if the 5 character will be constructed correctly
     * by the Character class.
     */
    function it_as_in_five_should_be_recognized(): void
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

    /**
     * Check to see if the 6 character will be constructed correctly
     * by the Character class.
     */
    function it_as_in_six_should_be_recognized(): void
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

    /**
     * Check to see if the 7 character will be constructed correctly
     * by the Character class.
     */
    function it_as_in_seven_should_be_recognized(): void
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

    /**
     * Check to see if the 8 character will be constructed correctly
     * by the Character class.
     */
    function it_as_in_eight_should_be_recognized(): void
    {
        $expected = ' _ '."\n";
        $expected .= '|_|'."\n";
        $expected .= '|_|'."\n";

        $this->beConstructedWith([
            [' ', '_', ' '],
            ['|', '_', '|'],
            ['|', '_', '|'],
        ]);

        $this->asString()->shouldContain($expected);
    }

    /**
     * Check to see if the 9 character will be constructed correctly
     * by the Character class.
     */
    function it_as_in_nine_should_be_recognized(): void
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
