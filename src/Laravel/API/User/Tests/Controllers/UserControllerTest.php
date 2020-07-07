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

namespace Tests\Omed\Laravel\API\User\Controllers;

use Tests\Omed\Laravel\API\User\TestCase;

class UserControllerTest extends TestCase
{
    public function testIndex()
    {
        $response = $this->json('GET', route('omed_user.index'));

        $json = $response->json('data');
        $response->assertStatus(200);
    }
}
