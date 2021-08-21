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

namespace Omed\Contracts\Resource;

use Doctrine\Inflector\InflectorFactory;

trait ResourceComponentTrait
{
    protected string $name;
    protected array $mappings;

    public function __construct()
    {
        $this->configure();
    }

    protected function configure(): void
    {
        $r         = new \ReflectionClass(__CLASS__);
        $inflector = InflectorFactory::create()->build();
        $className = str_replace('Component', '', $r->getShortName());

        $this->mappings[__NAMESPACE__.'\\Model'] = \dirname($r->getFileName()).'/Resources/doctrine';
        $this->name                              = $inflector->tableize($className);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getMappings(): array
    {
        return $this->mappings;
    }
}
