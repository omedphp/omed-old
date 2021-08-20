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

namespace Omed\Component\Product\Model;

use Omed\Contracts\Product\CategoriesInterface;

/**
 * @psalm-suppress MissingConstructor
 */
class Categories implements CategoriesInterface
{
    protected int $id;
    protected string $name;
    protected string $text;
    protected ?string $description = null;

    /**
     * @var resource|null
     */
    protected $picture = null;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }

    /**
     * @return resource|null
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param resource|null $picture
     */
    public function setPicture($picture): void
    {
        $this->picture = $picture;
    }
}
