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

namespace spec\Omed\Component\Product\Model;

use Omed\Component\Product\Model\Categories;
use Omed\Contracts\Product\CategoriesInterface;
use Omed\Contracts\Resource\ResourceInterface;
use PhpSpec\ObjectBehavior;

/**
 * @covers \Omed\Component\Product\Model\Categories
 */
class CategoriesSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(Categories::class);
    }

    public function it_should_implements_resource_interface()
    {
        $this->shouldImplement(ResourceInterface::class);
    }

    public function it_should_implements_categories_interface()
    {
        $this->shouldImplement(CategoriesInterface::class);
    }

    public function its_name_should_be_mutable()
    {
        $this->setName('name');
        $this->getName()->shouldReturn('name');
    }

    public function its_description_should_be_mutable()
    {
        $this->getDescription()->shouldBeNull();
        $this->setDescription('description');
        $this->getDescription()->shouldReturn('description');
    }

    public function its_picture_should_be_mutable()
    {
        $resource = fopen(__FILE__, 'r');

        $this->getPicture()->shouldBeNull();
        $this->setPicture($resource);
        $this->getPicture()->shouldReturn($resource);
    }
}
