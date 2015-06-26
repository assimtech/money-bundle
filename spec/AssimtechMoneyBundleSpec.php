<?php

namespace spec\Assimtech\MoneyBundle;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AssimtechMoneyBundleSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Assimtech\MoneyBundle\AssimtechMoneyBundle');
    }
}
