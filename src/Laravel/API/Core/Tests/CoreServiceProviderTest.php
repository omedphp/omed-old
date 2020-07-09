<?php

declare(strict_types=1);

/*
 * This file is part of the Omed Project.
 *
 * (c) Anthonius Munthi <me@itstoni.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Omed\Laravel\API\Core;

use LaravelDoctrine\ORM\DoctrineServiceProvider;
use Omed\Laravel\API\Core\CoreServiceProvider;
use Omed\Laravel\API\Core\Test\TestCase;

class CoreServiceProviderTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            DoctrineServiceProvider::class,
            CoreServiceProvider::class,
        ];
    }

    public function testRegister()
    {
        $providers = config('app.providers');
        $this->assertContains(DoctrineServiceProvider::class,$providers);
    }
}
