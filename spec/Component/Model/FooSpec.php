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

namespace spec\Omed\Component\Model;

use Omed\Component\Model\Foo;
use PhpSpec\ObjectBehavior;

class FooSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(Foo::class);
    }
}
