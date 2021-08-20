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

namespace spec\Omed\Component\Employee\Model;

use Omed\Component\Employee\Model\Employee;
use Omed\Contracts\Employee\EmployeeInterface;
use Omed\Contracts\Resource\ResourceInterface;
use PhpSpec\ObjectBehavior;

class EmployeeSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(Employee::class);
    }

    public function it_should_implements_resource_interface()
    {
        $this->shouldImplement(ResourceInterface::class);
    }

    public function it_should_implements_employee_interface()
    {
        $this->shouldImplement(EmployeeInterface::class);
    }

    public function its_firstName_should_be_mutable()
    {
        $this->setFirstName('firstname');
        $this->getFirstName()->shouldReturn('firstname');
    }

    public function its_lastName_should_be_mutable()
    {
        $this->setLastName('last name');
        $this->getLastName()->shouldReturn('last name');
    }

    public function its_title_should_be_mutable()
    {
        $this->getTitle()->shouldReturn(null);
        $this->setTitle('Mr.');
        $this->getTitle()->shouldReturn('Mr.');
    }

    public function its_birthDate_should_be_mutable()
    {
        $dateTime = new \DateTimeImmutable();
        $this->getBirthDate()->shouldReturn(null);

        $this->setBirthDate($dateTime);
        $this->getBirthDate()->shouldReturn($dateTime);
    }

    public function its_hireDate_should_be_mutable()
    {
        $date = new \DateTimeImmutable();

        $this->getHireDate()->shouldBeNull();
        $this->setHireDate($date);
        $this->getHireDate()->shouldReturn($date);
    }

    public function its_address_should_be_mutable()
    {
        $this->getAddress()->shouldBeNull();
        $this->setAddress($add = 'address');
        $this->getAddress()->shouldReturn($add);
    }

    public function its_city_should_be_mutable()
    {
        $this->getCity()->shouldBeNull();
        $this->setCity($city = 'city');
        $this->getCity()->shouldReturn($city);
    }

    public function its_region_should_be_mutable()
    {
        $this->getRegion()->shouldBeNull();
        $this->setRegion($region = 'region');
        $this->getRegion()->shouldReturn($region);
    }

    public function its_postalCode_should_be_mutable()
    {
        $this->getPostalCode()->shouldBeNull();
        $this->setPostalCode($postal = 'postal');
        $this->getPostalCode()->shouldReturn($postal);
    }

    public function its_country_should_be_mutable()
    {
        $this->getCountry()->shouldBeNull();
        $this->setCountry('country');
        $this->getCountry()->shouldReturn('country');
    }

    public function its_home_phone_should_be_mutable()
    {
        $this->getHomePhone()->shouldBeNull();
        $this->setHomePhone('phone');
        $this->getHomePhone()->shouldReturn('phone');
    }

    public function its_extension_should_be_mutable()
    {
        $this->getExtension()->shouldBeNull();
        $this->setExtension('extension');
        $this->getExtension()->shouldReturn('extension');
    }

    public function its_photo_should_be_mutable()
    {
        $this->getPhoto()->shouldBeNull();
        $this->setPhoto('photo');
        $this->getPhoto()->shouldReturn('photo');
    }

    public function its_notes_should_be_mutable()
    {
        $this->getNotes()->shouldBeNull();
        $this->setNotes('notes');
        $this->getNotes()->shouldReturn('notes');
    }

    public function its_reports_to_should_be_mutable(EmployeeInterface $employee)
    {
        $this->getReportsTo()->shouldBeNull();

        $this->setReportsTo($employee);
        $this->getReportsTo()->shouldReturn($employee);
    }

    public function its_photo_path_should_be_mutable()
    {
        $this->getPhotoPath()->shouldBeNull();
        $this->setPhotoPath('path');
        $this->getPhotoPath()->shouldReturn('path');
    }
}
