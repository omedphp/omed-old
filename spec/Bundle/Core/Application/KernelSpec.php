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

namespace spec\Omed\Bundle\Core\Application;

use Omed\Bundle\Core\Application\Kernel;
use PhpSpec\ObjectBehavior;
use Symfony\Component\HttpKernel\Kernel as HttpKernel;

/**
 * @covers \Omed\Bundle\Core\Application\Kernel
 */
class KernelSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beAnInstanceOf(TestKernel::class);
        $this->beConstructedWith('spec', true);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(Kernel::class);
    }

    public function it_should_be_a_http_kernel()
    {
        $this->shouldBeAnInstanceOf(HttpKernel::class);
    }

    public function it_should_initialize_components()
    {
        $this->boot();

        $components = $this->getComponents();
        $components->shouldBeArray();
        $components->shouldHaveKey('user');
    }
}
