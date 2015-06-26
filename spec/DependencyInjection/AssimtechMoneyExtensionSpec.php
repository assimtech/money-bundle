<?php

namespace spec\Assimtech\MoneyBundle\DependencyInjection;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class AssimtechMoneyExtensionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Assimtech\MoneyBundle\DependencyInjection\AssimtechMoneyExtension');
    }

    function it_can_load(ContainerBuilder $container)
    {
        $configs = array();
        $this->load($configs, $container);
    }
}
