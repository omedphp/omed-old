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

namespace Functional\Omed\Symfony;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

/**
 * @covers \Omed\Bundle\Core\Application\Kernel
 */
class KernelTest extends KernelTestCase
{
    public function test_boot()
    {
        static::bootKernel();

        $em = $this->getContainer()->get(ManagerRegistry::class);
        $this->assertInstanceOf(ManagerRegistry::class, $em);
    }
}
