<?php

namespace spec\JM\PHPKata\JM\PHPKata;

use JM\PHPKata\PrimeFactors;
use PhpSpec\ObjectBehavior;

// 20:44
/**
 *
 * PrimeFactorsSpec specification class
 */
class PrimeFactorsSpec extends ObjectBehavior
{
    /**
     * It is initializable
     *
     * @return void
     */
    public function it_is_initializable()
    {
        $this->shouldHaveType(PrimeFactors::class);
    }

    /**
     * It should return an empty array for 1
     *
     * @return void
     */
    public function it_should_return_an_empty_array_on_1()
    {
        $this->generatate(1)->shouldReturn([]);
    }

    /**
     * It should generate good result for 2
     *
     * @return void
     */
    public function it_should_generate_good_result_for_2()
    {
        $this->generatate(2)->shouldReturn([2]);
    }

    /**
     * It should generate good result for 2
     *
     * @return void
     */
    public function it_should_generate_good_result_for_4()
    {
        $this->generatate(4)->shouldReturn([2, 2]);
    }

    /**
     * It should generate good result for 2
     *
     * @return void
     */
    public function it_should_generate_good_result_for_9()
    {
        $this->generatate(9)->shouldReturn([3, 3]);
    }

    /**
     * It should generate good result for 12
     *
     * @return void
     */
    public function it_should_generate_good_result_for_100()
    {
        $this->generatate(100)->shouldReturn([2, 2, 5, 5]);
    }
}
