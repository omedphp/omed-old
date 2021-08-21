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

namespace Omed\Component\Employees\Model;

use Omed\Contracts\Employees\EmployeeInterface;

class Employee implements EmployeeInterface
{
    protected string $id;
    protected string $fullName;
    protected \DateTimeInterface $birthDate;
    protected int $gender;
    protected \DateTimeInterface $hireDate;

    public function __construct(string $fullName, \DateTimeInterface $birthDate, int $gender, \DateTimeInterface $hireDate)
    {
        $this->fullName  = $fullName;
        $this->birthDate = $birthDate;
        $this->gender    = $gender;
        $this->hireDate  = $hireDate;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getFullName(): string
    {
        return $this->fullName;
    }

    public function setFullName(string $fullName): void
    {
        $this->fullName = $fullName;
    }

    public function getBirthDate(): \DateTimeInterface
    {
        return $this->birthDate;
    }

    public function setBirthDate(\DateTimeInterface $birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    public function getGender(): int
    {
        return $this->gender;
    }

    public function setGender(int $gender): void
    {
        $this->gender = $gender;
    }

    public function isMale(): bool
    {
        return EmployeeInterface::GENDER_MALE === $this->getGender();
    }

    public function isFemale(): bool
    {
        return EmployeeInterface::GENDER_FEMALE === $this->getGender();
    }

    public function getHireDate(): \DateTimeInterface
    {
        return $this->hireDate;
    }

    public function setHireDate(\DateTimeInterface $hireDate): void
    {
        $this->hireDate = $hireDate;
    }
}
