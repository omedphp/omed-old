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

use Omed\Laravel\API\User\Model\User;
use Omed\Laravel\API\User\UserServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            UserServiceProvider::class,
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
    }

    protected function setUp(): void
    {
        parent::setUp();
        $this->setupDatabase($this->app);
    }

    protected function setupDatabase($app): void
    {
        include_once __DIR__.'/../Resources/database/migrations/create_users_table.stub.php';
        (new \CreateUsersTable())->up();

        (new User(['email' => 'test@user.com', 'password' => 'test']))->save();
    }
}
