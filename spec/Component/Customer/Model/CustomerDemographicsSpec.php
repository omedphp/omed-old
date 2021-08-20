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

use Omed\Component\Customer\Model\CustomerDemographics;
use Omed\Component\Customer\Model\Demographics;
use Omed\Contracts\Customer\CustomerInterface;
use PhpSpec\ObjectBehavior;

/**
 * @covers \Omed\Component\Customer\Model\CustomerDemographics
 */
class CustomerDemographicsSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(CustomerDemographics::class);
    }

    public function its_demographic_should_be_mutable(Demographics $demographics)
    {
        $this->setDemographics($demographics);
        $this->getDemographics()->shouldReturn($demographics);
    }

    public function its_customer_should_be_mutable(CustomerInterface $customer)
    {
        $this->setCustomer($customer);
        $this->getCustomer()->shouldReturn($customer);
    }
}
