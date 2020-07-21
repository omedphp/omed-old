<?php

namespace Omed\Laravel\Core\Tests\Http\Controllers;

use Omed\Laravel\Core\Http\Controllers\ApiController;
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
