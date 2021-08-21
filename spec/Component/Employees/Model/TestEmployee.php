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

namespace spec\Omed\Component\Employees\Model;

use Omed\Component\Employees\Model\Employee;

class TestEmployee extends Employee
{
    public function __construct(string $fullName, \DateTimeInterface $birthDate, int $gender, \DateTimeInterface $hireDate, string $id)
    {
        parent::__construct($fullName, $birthDate, $gender, $hireDate);
        $this->id = $id;
    }
}
