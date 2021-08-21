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

namespace Omed\Component\Testing;

trait PropertiesSpec
{
    public function its_properties_should_be_mutable()
    {
    }

    abstract protected function getPropertiesToTests(): array;
}