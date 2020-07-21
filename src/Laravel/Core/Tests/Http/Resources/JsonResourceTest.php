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

namespace Omed\Laravel\Core\Tests\Http\Resources;

use Omed\Laravel\Core\Http\Resources\JsonResource;
use PHPUnit\Framework\TestCase;

class TestJsonResource extends JsonResource
{
    protected function getSelfRoute($resource)
    {
        // TODO: Implement getSelfRoute() method.
    }
}

class JsonResourceTest extends TestCase
{
}
