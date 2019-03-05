<?php declare(strict_types=1);

namespace spec\JM\PHPKata\JM\PHPKata;

use JM\PHPKata\BankOCR;
use PhpSpec\ObjectBehavior;

class BankOCRSpec extends ObjectBehavior
{
    /**
     * As the OCR class reads 000000000.txt it should pare se string
     * value of 000000000.
     */
    function it_should_correctly_recognize_sets_of_zeros_after_parsing(): void
    {
        $this->readFile('000000000.txt')->shouldReturn('000000000');
    }

    /**
     * As the OCR class reads 111111111.txt it should pare se string
     * value of 111111111.
     */
    function it_should_correctly_recognize_sets_of_ones_after_parsing(): void
    {
        $this->readFile('111111111.txt')->shouldReturn('111111111');
    }

    /**
     * As the OCR class reads 222222222.txt it should pare se string
     * value of 222222222.
     */
    function it_should_correctly_recognize_sets_of_twos_after_parsing(): void
    {
        $this->readFile('222222222.txt')->shouldReturn('222222222');
    }

    /**
     * As the OCR class reads 333333333.txt it should pare se string
     * value of 333333333.
     */
    function it_should_correctly_recognize_sets_of_threes_after_parsing(): void
    {
        $this->readFile('333333333.txt')->shouldReturn('333333333');
    }

    /**
     * As the OCR class reads 444444444.txt it should pare se string
     * value of 444444444.
     */
    function it_should_correctly_recognize_sets_of_fours_after_parsing(): void
    {
        $this->readFile('444444444.txt')->shouldReturn('444444444');
    }

    /**
     * As the OCR class reads 555555555.txt it should pare se string
     * value of 555555555.
     */
    function it_should_correctly_recognize_sets_of_fives_after_parsing(): void
    {
        $this->readFile('555555555.txt')->shouldReturn('555555555');
    }

    /**
     * As the OCR class reads 666666666.txt it should pare se string
     * value of 666666666.
     */
    function it_should_correctly_recognize_sets_of_sixes_after_parsing(): void
    {
        $this->readFile('666666666.txt')->shouldReturn('666666666');
    }

    /**
     * As the OCR class reads 777777777.txt it should pare se string
     * value of 777777777.
     */
    function it_should_correctly_recognize_sets_of_sevens_after_parsing(): void
    {
        $this->readFile('777777777.txt')->shouldReturn('777777777');
    }

    /**
     * As the OCR class reads 888888888.txt it should pare se string
     * value of 888888888.
     */
    function it_should_correctly_recognize_sets_of_eights_after_parsing(): void
    {
        $this->readFile('888888888.txt')->shouldReturn('888888888');
    }

    /**
     * As the OCR class reads 999999999.txt it should pare se string
     * value of 999999999.
     */
    function it_should_correctly_recognize_sets_of_nines_after_parsing(): void
    {
        $this->readFile('999999999.txt')->shouldReturn('999999999');
    }

    /**
     * As the OCR class reads 123456789.txt it should pare se string
     * value of 123456789.
     */
    function it_should_correctly_recognize_sets_of_numbers_from_one_to_nine_after_parsing(): void
    {
        $this->readFile('123456789.txt')->shouldReturn('123456789');
    }
}
