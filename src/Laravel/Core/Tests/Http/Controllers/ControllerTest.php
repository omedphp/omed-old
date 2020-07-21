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

namespace Omed\Laravel\Core\Tests\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Omed\Laravel\Core\Http\Controllers\Controller;
use Omed\Laravel\Core\Tests\TestCase;

class ControllerTest extends TestCase
{
    public function testConfig()
    {
        $r = new \ReflectionClass(Controller::class);
        $traits = array_keys($r->getTraits());
        $this->assertContains(AuthorizesRequests::class, $traits);
        $this->assertContains(DispatchesJobs::class, $traits);
        $this->assertContains(ValidatesRequests::class, $traits);
    }
}
