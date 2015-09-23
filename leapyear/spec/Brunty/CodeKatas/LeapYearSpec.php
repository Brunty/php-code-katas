<?php

namespace spec\Brunty\CodeKatas;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LeapYearSpec extends ObjectBehavior
{

    function it_is_initializable()
    {
        $this->shouldHaveType('Brunty\CodeKatas\LeapYear');
    }

    function it_returns_true_for_divisible_by_4()
    {
        $this->isLeapYear(1996)->shouldReturn(true);
    }

    function it_returns_false_for_non_divisible_by_four()
    {
        $this->isLeapYear(1997)->shouldReturn(false);
    }

    function it_returns_false_for_divisible_by_one_hundred()
    {
        $this->isLeapYear(1900)->shouldReturn(false);
    }

    function it_returns_true_for_divisible_by_four_hundred()
    {
        $this->isLeapYear(2000)->shouldReturn(true);
    }
}
