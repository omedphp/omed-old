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

namespace Tests\Omed\Laravel\Core;

use LaravelDoctrine\ORM\DoctrineServiceProvider;
use Omed\Laravel\Core\CoreServiceProvider;
use Omed\Laravel\Core\Testing\TestCase;

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

        $config = config('doctrine.managers.default');
        $this->assertContains(DoctrineServiceProvider::class, $providers);
    }
}
