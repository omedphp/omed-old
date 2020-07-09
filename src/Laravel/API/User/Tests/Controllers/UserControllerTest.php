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

use Tests\Omed\Laravel\API\User\UserTestCase;

class UserControllerTest extends UserTestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->refresheDatabase();
    }

    public function testIndex()
    {
        $app = $this->app;
        /** @var \Omed\Component\User\Manager\UserManager $manager */
        $manager = $app->get('omed.managers.user');

        $user = $manager->createUser();
        $user
            ->setUsername('test')
            ->setPlainPassword('test')
            ->setEmail('test@example.com');

        $manager->storeUser($user);

        $this->assertNotNull($user->getPassword());
        $this->assertNull($user->getPlainPassword());
        $this->assertNotNull($user->getId());
    }
}
