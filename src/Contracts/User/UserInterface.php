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

namespace Omed\Contracts\User;

use Omed\Contracts\Resource\ResourceInterface;
use Omed\Contracts\Resource\ToggleableInterface;

interface UserInterface extends ToggleableInterface, ResourceInterface
{
}
