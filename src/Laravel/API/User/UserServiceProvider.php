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

use Doctrine\Common\Persistence\ManagerRegistry;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\ServiceProvider;
use Omed\Component\User\Manager\UserManager;
use Omed\Component\User\Util\CanonicalFieldsUpdater;
use Omed\Component\User\Util\Canonicalizer;
use Omed\Component\User\Util\PasswordUpdater;
use Omed\Laravel\API\User\Controllers\UserController;
use Omed\Laravel\API\User\Model\User;
use Symfony\Component\Security\Core\Encoder\EncoderFactory;

class UserServiceProvider extends ServiceProvider
{
    public function boot(Filesystem $filesystem): void
    {
        if (\function_exists('config_path')) { // function not available and 'publish' not relevant in Lumen
            $this->publishes([
                __DIR__.'/Resources/config/user.php' => config_path('omed_user.php'),
            ], 'config');
        }

        $app = $this->app;

        $app->alias(UserController::class, 'OmedUserController');
        $this->loadRoutesFrom(__DIR__.'/Resources/config/routes.php');

        $app->bind(UserManager::class, function ($app) {
            /* @var string $userClass */
            /* @var \Doctrine\Common\Persistence\ManagerRegistry $registry */
            /* @var \Illuminate\Foundation\Application $app */
            $registry = $app->get(ManagerRegistry::class);
            $om = $registry->getManagerForClass(User::class);
            $canonicalizer = new Canonicalizer();
            $fieldsUpdater = new CanonicalFieldsUpdater($canonicalizer, $canonicalizer);
            $userClass = config('omed_user.models.user');

            $encoderFactory = new EncoderFactory(['user' => [
                'algorithm' => 'bcrypt',
                'cost' => 12,
            ]]);
            $passwordUpdater = new PasswordUpdater($encoderFactory);

            return new UserManager($passwordUpdater, $fieldsUpdater, $om, $userClass);
        });
        $app->alias(UserManager::class,'omed.managers.user');
    }

    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/Resources/config/user.php',
            'omed_user'
        );

        $config = config('omed_user.doctrine_manager_config');
        $this->app['config']->set('doctrine.managers.omed_user', $config);
    }

    public static function getDoctrineXMLSchemaPath()
    {
        return __DIR__.'/Resources/config/doctrine';
    }
}
