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

namespace spec\Omed\Component\Customer\Model;

use Omed\Component\Customer\Model\Demographics;
use Omed\Contracts\Resource\ResourceInterface;
use PhpSpec\ObjectBehavior;

/**
 * @covers \Omed\Component\Customer\Model\Demographics
 */
class DemographicsSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(Demographics::class);
    }

    public function it_should_implement_resource_interface()
    {
        $this->shouldImplement(ResourceInterface::class);
    }

    public function its_description_should_be_mutable()
    {
        $this->getDescription()->shouldBeNull();
        $this->setDescription('desc');
        $this->getDescription()->shouldReturn('desc');
    }
}
