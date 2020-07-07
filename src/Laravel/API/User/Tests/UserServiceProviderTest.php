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

/**
 * Class UserServiceProviderTest.
 *
 * @covers \Omed\Laravel\API\User\UserServiceProvider
 */
class UserServiceProviderTest extends TestCase
{
    public function testLoadDefaultConfig(): void
    {
        $this->assertEquals('omed_users', config('omed_user.table_names.user'));
    }
}
