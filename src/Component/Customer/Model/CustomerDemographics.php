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

namespace Omed\Component\Customer\Model;

use Omed\Contracts\Customer\CustomerInterface;

/**
 * @psalm-suppress MissingConstructor
 */
class CustomerDemographics
{
    protected CustomerInterface $customer;
    protected Demographics $demographics;

    /**
     * @return CustomerInterface
     */
    public function getCustomer(): CustomerInterface
    {
        return $this->customer;
    }

    /**
     * @param CustomerInterface $customer
     */
    public function setCustomer(CustomerInterface $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * @return Demographics
     */
    public function getDemographics(): Demographics
    {
        return $this->demographics;
    }

    /**
     * @param Demographics $demographics
     */
    public function setDemographics(Demographics $demographics): void
    {
        $this->demographics = $demographics;
    }
}
