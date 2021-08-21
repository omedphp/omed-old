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

namespace Omed\Bundle\Core\Application;

use Omed\Contracts\Resource\ComponentInterface;
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    /**
     * @var array|ComponentInterface[]
     */
    protected array $components;

    /**
     * @return array|ComponentInterface[]
     */
    public function getComponents(): array
    {
        return $this->components;
    }

    protected function initializeBundles()
    {
        parent::initializeBundles();

        $this->components = [];

        foreach ($this->registerComponents() as $component) {
            $this->components[$component->getName()] = $component;
        }
    }

    protected function configureContainer(ContainerConfigurator $container): void
    {
        $env = $this->getEnvironment();
        $container->import($this->getProjectDir().'/config/{packages}/*.yaml');
        $container->import($this->getProjectDir().'/config/{packages}/{'.$env.'}/*.yaml');
    }

    protected function configureRoutes(RoutingConfigurator $routes): void
    {
        $routes->import($this->getProjectDir().'/config/{routes}/*.yaml');
    }

    /**
     * @return iterable|ComponentInterface[]
     */
    protected function registerComponents(): iterable
    {
        $contents = require $this->getProjectDir().'/config/components.php';
        foreach ($contents as $class) {
            yield new $class();
        }
    }
}
