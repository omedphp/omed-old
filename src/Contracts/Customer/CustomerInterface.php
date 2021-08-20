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

namespace Omed\Contracts\Customer;

use Omed\Contracts\Resource\ResourceInterface;

interface CustomerInterface extends ResourceInterface
{
    /**
     * @return string
     */
    public function getCompanyName(): string;

    /**
     * @param string $companyName
     */
    public function setCompanyName(string $companyName): void;

    /**
     * @return string|null
     */
    public function getContactName(): ?string;

    /**
     * @param string|null $contactName
     */
    public function setContactName(?string $contactName): void;

    /**
     * @return string|null
     */
    public function getContactTitle(): ?string;

    /**
     * @param string|null $contactTitle
     */
    public function setContactTitle(?string $contactTitle): void;

    /**
     * @return string|null
     */
    public function getAddress(): ?string;

    /**
     * @param string|null $address
     */
    public function setAddress(?string $address): void;

    /**
     * @return string|null
     */
    public function getCity(): ?string;

    /**
     * @param string|null $city
     */
    public function setCity(?string $city): void;

    /**
     * @return string|null
     */
    public function getRegion(): ?string;

    /**
     * @param string|null $region
     */
    public function setRegion(?string $region): void;

    /**
     * @return string|null
     */
    public function getPostalCode(): ?string;

    /**
     * @param string|null $postalCode
     */
    public function setPostalCode(?string $postalCode): void;

    /**
     * @return string|null
     */
    public function getCountry(): ?string;

    /**
     * @param string|null $country
     */
    public function setCountry(?string $country): void;

    /**
     * @return string|null
     */
    public function getPhone(): ?string;

    /**
     * @param string|null $phone
     */
    public function setPhone(?string $phone): void;

    /**
     * @return string|null
     */
    public function getFax(): ?string;

    /**
     * @param string|null $fax
     */
    public function setFax(?string $fax): void;
}
