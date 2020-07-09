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

namespace Tests\Omed\Laravel\API\User;

use LaravelDoctrine\ORM\DoctrineServiceProvider;
use LaravelDoctrine\ORM\Facades\Doctrine;
use LaravelDoctrine\ORM\Facades\EntityManager;
use LaravelDoctrine\ORM\Facades\Registry;
use Omed\Laravel\API\Core\CoreServiceProvider;
use Omed\Laravel\API\User\UserServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class UserTestCase extends OrchestraTestCase
{
    protected function refresheDatabase()
    {
        $this->artisan('doctrine:schema:create');
    }

    protected function getPackageProviders($app)
    {
        return [
            DoctrineServiceProvider::class,
            CoreServiceProvider::class,
            UserServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'EntityManager' => EntityManager::class,
            'Registry' => Registry::class,
            'Doctrine' => Doctrine::class,
        ];
    }

    protected function getEnvironmentSetUp($app): void
    {
        $app['config']->set('database.default', 'sqlite');
        $app['config']->set('database.connections.sqlite', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);

        $app['config']->set('doctrine.managers.default.connection', 'sqlite');
        $app['config']->set('doctrine.managers.default.paths', [__DIR__.'/Resources']);
    }

    protected function setUp(): void
    {
        parent::setUp();
        $this->setupDatabase($this->app);
    }

    protected function setupDatabase($app): void
    {
    }
}
