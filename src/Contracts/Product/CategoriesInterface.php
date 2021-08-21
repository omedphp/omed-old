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
    public function getDescription(): ?string;

    public function setDescription(?string $description): void;

    public function getName(): string;

    public function setName(string $name): void;

    public function getText(): string;

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
