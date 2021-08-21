<?php

/*
 * This file is part of the Omed project.
 *
 * (c) Anthonius Munthi <https://itstoni.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace spec\Omed\Component\User;

use Omed\Component\User\UserComponent;
use Omed\Contracts\Resource\ComponentInterface;
use PhpSpec\ObjectBehavior;

/**
 * @covers \Omed\Component\User\UserComponent
 * @covers \Omed\Contracts\Resource\ResourceComponentTrait
 */
class UserComponentSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(UserComponent::class);
    }

    public function it_should_implement_component_interface()
    {
        $this->shouldImplement(ComponentInterface::class);
    }

    public function it_should_provide_component_name()
    {
        $this->getName()->shouldReturn('user');
    }

    public function it_should_provide_model_mappings()
    {
        $this->getMappings()->shouldBeArray();
    }
}
