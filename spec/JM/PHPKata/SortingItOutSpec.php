<?php

namespace spec\JM\PHPKata\JM\PHPKata;

use JM\PHPKata\SortingItOut;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SortingItOutSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(SortingItOut::class);
    }
    
    function it_should_order_simple_characters_grouped_on_alphabet() {
        $this->sortOnAlphaBethGrouped('BBAA')->shouldEqual('aabb');
    }
    
    function it_should_order_advanced_characters_grouped_on_alphabet() {
        $msg = 'When not studying nuclear physics, Bambi likes to play beach volleyball.';
        $expected = 'aaaaabbbbcccdeeeeeghhhiiiiklllllllmnnnnooopprsssstttuuvwyyyy';
        
        $this->sortOnAlphaBethGrouped($msg)->shouldEqual($expected);
    }
}
