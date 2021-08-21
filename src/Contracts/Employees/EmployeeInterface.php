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

namespace Omed\Contracts\Employees;

interface EmployeeInterface
{
    public const GENDER_FEMALE  = 2;
    public const GENDER_MALE    = 1;
    public const GENDER_UNKNOWN = 0;

    public function getFullName(): string;

    public function setFullName(string $fullName): void;

    public function getBirthDate(): \DateTimeInterface;

    public function setBirthDate(\DateTimeInterface $birthDate): void;

    public function getGender(): int;

    public function setGender(int $gender): void;

    public function isMale(): bool;

    public function isFemale(): bool;

    public function getHireDate(): \DateTimeInterface;

    public function setHireDate(\DateTimeInterface $hireDate): void;
}
