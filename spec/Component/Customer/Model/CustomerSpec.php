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

namespace spec\Omed\Component\Customer\Model;

use Omed\Component\Customer\Model\Customer;
use Omed\Contracts\Customer\CustomerInterface;
use Omed\Contracts\Resource\ResourceInterface;
use PhpSpec\ObjectBehavior;

class CustomerSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(Customer::class);
    }

    public function it_should_implement_resource_interface()
    {
        $this->shouldImplement(ResourceInterface::class);
    }

    public function it_should_implement_customer_interface()
    {
        $this->shouldImplement(CustomerInterface::class);
    }

    public function its_company_name_should_be_mutable()
    {
        $this->setCompanyName('name');
        $this->getCompanyName()->shouldReturn('name');
    }

    public function its_contact_name_should_be_mutable()
    {
        $this->getContactName()->shouldBeNull();
        $this->setContactName('contact');
        $this->getContactName()->shouldReturn('contact');
    }

    public function its_contact_title_should_be_mutable()
    {
        $this->getContactTitle()->shouldBeNull();
        $this->setContactTitle('title');
        $this->getContactTitle()->shouldReturn('title');
    }

    public function its_address_should_be_mutable()
    {
        $this->getAddress()->shouldBeNull();
        $this->setAddress('addr');
        $this->getAddress()->shouldReturn('addr');
    }

    public function its_city_should_be_mutable()
    {
        $this->getCity()->shouldBeNull();
        $this->setCity('city');
        $this->getCity()->shouldBe('city');
    }

    public function its_region_should_be_mutable()
    {
        $this->getRegion()->shouldBeNull();
        $this->setRegion('region');
        $this->getRegion()->shouldReturn('region');
    }

    public function its_postal_code_should_be_mutable()
    {
        $this->getPostalCode()->shouldBeNull();
        $this->setPostalCode('postal');
        $this->getPostalCode()->shouldReturn('postal');
    }

    public function its_country_should_be_mutable()
    {
        $this->getCountry()->shouldBeNull();
        $this->setCountry('country');
        $this->getCountry()->shouldReturn('country');
    }

    public function its_phone_should_be_mutable()
    {
        $this->getPhone()->shouldBeNull();
        $this->setPhone('phone');
        $this->getPhone()->shouldReturn('phone');
    }

    public function its_fax_should_be_mutable()
    {
        $this->getFax()->shouldBeNull();
        $this->setFax('fax');
        $this->getFax()->shouldReturn('fax');
    }
}
