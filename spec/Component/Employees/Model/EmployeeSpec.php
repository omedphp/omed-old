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
use Omed\Contracts\Employees\EmployeeInterface;
use PhpSpec\ObjectBehavior;

/**
 * @covers \Omed\Component\Employees\Model\Employee
 */
class EmployeeSpec extends ObjectBehavior
{
    public function let(
        \DateTimeImmutable $date
    ) {
        $this->beAnInstanceOf(TestEmployee::class);
        $this->beConstructedWith(
            'full-name',
            $date,
            1,
            $date,
            'id'
        );
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(Employee::class);
    }

    public function its_id_should_be_mutable()
    {
        $this->getId()->shouldReturn('id');
    }

    public function its_full_name_should_be_mutable()
    {
        $this->getFullName()->shouldReturn('full-name');
        $this->setFullName('new');
        $this->getFullName()->shouldReturn('new');
    }

    public function its_birth_date_should_be_mutable(
        \DateTimeImmutable $date,
        \DateTimeImmutable $newDate
    ) {
        $this->getBirthDate()->shouldReturn($date);
        $this->setBirthDate($newDate);
        $this->getBirthDate()->shouldReturn($newDate);
    }

    public function its_gender_should_be_mutable()
    {
        $this->isMale()->shouldReturn(true);
        $this->isFemale()->shouldReturn(false);

        $this->setGender(EmployeeInterface::GENDER_FEMALE);
        $this->isMale()->shouldReturn(false);
        $this->isFemale()->shouldReturn(true);

        $this->setGender(EmployeeInterface::GENDER_UNKNOWN);
        $this->isMale()->shouldReturn(false);
        $this->isFemale()->shouldReturn(false);
    }

    public function its_hire_date_should_be_mutable(
        \DateTimeImmutable $date,
        \DateTimeImmutable $newDate
    ) {
        $this->getHireDate()->shouldReturn($date);
        $this->setHireDate($newDate);
        $this->getHireDate()->shouldReturn($newDate);
    }
}
