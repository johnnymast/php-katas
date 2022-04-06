<?php declare(strict_types=1);

namespace spec\JM\PHPKata\JM\PHPKata;

use JM\PHPKata\Anagrams;
use PhpSpec\ObjectBehavior;

class AnagramsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Anagrams::class);
    }

    function it_should_return_it_self_when_analyzing_dataset() {
        $this->analyse('empty.txt')->shouldHaveType(Anagrams::class);
    }

    function it_should_be_able_tp_analyze_the_wordcount() {
        $this->analyse('list.txt')->wordCount()->shouldReturn(338883);
    }

    function it_should_find_anagrams_for_the_word_altair() {
        $this->analyse('list.txt')->getAnagramsForWord('altair')->shouldHaveCount(4);
    }

    function it_should_a_correct_anagram_for_altair() {
        $this->analyse('list.txt')->getAnagramsForWord('altair')->shouldContain("lariat");
    }

    function it_should_a_correct_anagram_for_arrest() {
        $this->analyse('list.txt')->getAnagramsForWord('arrest')->shouldContain("rarest");
    }
}
