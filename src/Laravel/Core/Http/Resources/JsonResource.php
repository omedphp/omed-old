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

namespace Omed\Laravel\Core\Http\Resources;

use Doctrine\Inflector\InflectorFactory;
use Illuminate\Http\Resources\Json\JsonResource as BaseJsonResource;

abstract class JsonResource extends BaseJsonResource
{
    protected $filters = [];

    public function toArray($request)
    {
        $resource = $this->resource;
        $retVal = [];

        $inflector = InflectorFactory::create()->build();
        $r = new \ReflectionObject($resource);
        foreach ($r->getMethods(\ReflectionMethod::IS_PUBLIC) as $method) {
            $name = $method->getName();
            $key = strtr($name, [
                'get' => '',
                'is' => '',
            ]);

            if ($this->validateProperties($name)) {
                $key = $inflector->camelize($key);
                $retVal[$key] = \call_user_func([$resource, $name]);
            }
        }

        $retVal['_self'] = $this->getSelfRoute($resource);

        return $retVal;
    }

    protected function validateProperties($name)
    {
        if (
            false === strpos($name, 'get')
            && false == strpos($name, 'is')
        ) {
            return false;
        }

        $lower = strtolower($name);
        foreach ($this->filters as $filter) {
            if (false !== strpos($lower, $filter)) {
                return false;
            }
        }

        return true;
    }

    /**
     * @param object $resource
     *
     * @return string
     */
    abstract protected function getSelfRoute($resource);
}
