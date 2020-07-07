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

namespace Omed\Laravel\API\User;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;
use Omed\Laravel\API\User\Controllers\UserController;

class UserServiceProvider extends ServiceProvider
{
    public function boot(Filesystem $filesystem): void
    {
        if (\function_exists('config_path')) { // function not available and 'publish' not relevant in Lumen
            $this->publishes([
                __DIR__.'/Resources/config/user.php' => config_path('omed_user.php'),
            ], 'config');

            $this->publishes([
                __DIR__.'/Resources/database/migrations/create_users_table.stub.php' => $this->getMigrationFileName($filesystem),
            ], 'migrations');
        }

        $this->app->alias(UserController::class, 'OmedUserController');
        $this->loadRoutesFrom(__DIR__.'/Resources/config/routes.php');
    }

    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/Resources/config/user.php',
            'omed_user'
        );
    }

    /**
     * Returns existing migration file if found, else uses the current timestamp.
     */
    protected function getMigrationFileName(Filesystem $filesystem): string
    {
        $timestamp = date('Y_m_d_His');

        return Collection::make($this->app->databasePath().\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR)
            ->flatMap(function ($path) use ($filesystem) {
                return $filesystem->glob($path.'*_create_users_table.php');
            })->push($this->app->databasePath()."/migrations/{$timestamp}_create_users_table.php")
            ->first();
    }
}
