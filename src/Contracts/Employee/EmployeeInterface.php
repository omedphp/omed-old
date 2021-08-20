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

namespace Omed\Contracts\Employee;

use Omed\Contracts\Resource\ResourceInterface;

/**
 * @psalm-suppress MissingConstructor
 */
interface EmployeeInterface extends ResourceInterface
{
    /**
     * @return string
     */
    public function getFirstName(): string;

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void;

    /**
     * @return string
     */
    public function getLastName(): string;

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void;

    /**
     * @return string|null
     */
    public function getTitle(): ?string;

    /**
     * @param string|null $title
     */
    public function setTitle(?string $title): void;

    /**
     * @return string|null
     */
    public function getTitleOfCourtesy(): ?string;

    /**
     * @param string|null $titleOfCourtesy
     */
    public function setTitleOfCourtesy(?string $titleOfCourtesy): void;

    /**
     * @return \DateTimeInterface|null
     */
    public function getBirthDate(): ?\DateTimeInterface;

    /**
     * @param \DateTimeInterface|null $birthDate
     */
    public function setBirthDate(?\DateTimeInterface $birthDate): void;

    /**
     * @return \DateTimeInterface|null
     */
    public function getHireDate(): ?\DateTimeInterface;

    /**
     * @param \DateTimeInterface|null $hireDate
     */
    public function setHireDate(?\DateTimeInterface $hireDate): void;

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
    public function getHomePhone(): ?string;

    /**
     * @param string|null $home_phone
     */
    public function setHomePhone(?string $home_phone): void;

    /**
     * @return string|null
     */
    public function getExtension(): ?string;

    /**
     * @param string|null $extension
     */
    public function setExtension(?string $extension): void;

    /**
     * @return mixed|null
     */
    public function getPhoto();

    /**
     * @param mixed|null $photo
     */
    public function setPhoto($photo): void;

    /**
     * @return string|null
     */
    public function getNotes(): ?string;

    /**
     * @param string|null $notes
     */
    public function setNotes(?string $notes): void;

    /**
     * @return EmployeeInterface|null
     */
    public function getReportsTo(): ?self;

    /**
     * @param EmployeeInterface|null $reportsTo
     */
    public function setReportsTo(?self $reportsTo): void;

    /**
     * @return string|null
     */
    public function getPhotoPath(): ?string;

    /**
     * @param string|null $photoPath
     */
    public function setPhotoPath(?string $photoPath): void;
}
