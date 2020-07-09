<?php
/*
 * This file is part of the Omed Project.
 *
 * (c) Anthonius Munthi <me@itstoni.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Omed\Laravel\API\Core;


use Illuminate\Support\ServiceProvider;
use Omed\Laravel\API\Core\Doctrine\Configurator;

class CoreServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $app = $this->app;
    }

    public function register()
    {
    }
}