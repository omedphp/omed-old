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

use Omed\Laravel\Core\Tests\TestCase;

class ApiControllerTest extends TestCase
{
    public function testUnauthenticated()
    {
        $response = $this->get(route('core_tests.index'));
        $response->assertStatus(302);
        $response->assertRedirect('/login');
    }
}
