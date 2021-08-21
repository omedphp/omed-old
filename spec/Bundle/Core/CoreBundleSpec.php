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

namespace spec\Omed\Bundle\Core;

use Omed\Bundle\Core\CoreBundle;
use PhpSpec\ObjectBehavior;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class CoreBundleSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(CoreBundle::class);
    }

    public function it_should_extends_bundle()
    {
        $this->shouldBeAnInstanceOf(Bundle::class);
    }
}
