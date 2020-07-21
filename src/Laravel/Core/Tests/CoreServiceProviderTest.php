<?php

namespace Omed\Laravel\Core\Tests;

use Omed\Laravel\Core\CoreServiceProvider;
use Omed\Laravel\Core\Tests\TestCase;

class CoreServiceProviderTest extends TestCase
{
    public function testDefaultConfig()
    {
        $this->assertEquals('api',config('omed.core.api_prefix'));
    }
}
