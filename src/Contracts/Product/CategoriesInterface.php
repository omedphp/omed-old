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

namespace Omed\Contracts\Product;

use Omed\Contracts\Resource\ResourceInterface;

/**
 * @psalm-suppress MissingConstructor
 */
interface CategoriesInterface extends ResourceInterface
{
    /**
     * @return string|null
     */
    public function getDescription(): ?string;

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): void;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param string $name
     */
    public function setName(string $name): void;

    /**
     * @return string
     */
    public function getText(): string;

    /**
     * @param string $text
     */
    public function setText(string $text): void;

    /**
     * @return resource|null
     */
    public function getPicture();

    /**
     * @param resource|null $picture
     */
    public function setPicture($picture): void;
}
