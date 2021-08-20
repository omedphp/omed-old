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

namespace Omed\Component\Employee\Model;

use Omed\Contracts\Employee\EmployeeInterface;
use Omed\Contracts\Resource\ResourceInterface;

/**
 * @psalm-suppress MissingConstructor
 */
class Employee implements ResourceInterface, EmployeeInterface
{
    protected int $id;

    protected string $firstName;
    protected string $lastName;
    protected ?string $title                 = null;
    protected ?string $titleOfCourtesy       = null;
    protected ?\DateTimeInterface $birthDate = null;
    protected ?\DateTimeInterface $hireDate  = null;
    protected ?string $address               = null;
    protected ?string $city                  = null;
    protected ?string $region                = null;
    protected ?string $postalCode            = null;
    protected ?string $country               = null;
    protected ?string $home_phone            = null;
    protected ?string $extension             = null;

    /**
     * @var mixed|null
     */
    protected $photo = null;

    protected ?string $notes                = null;
    protected ?EmployeeInterface $reportsTo = null;
    protected ?string $photoPath            = null;

    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string|null
     */
    public function getTitleOfCourtesy(): ?string
    {
        return $this->titleOfCourtesy;
    }

    /**
     * @param string|null $titleOfCourtesy
     */
    public function setTitleOfCourtesy(?string $titleOfCourtesy): void
    {
        $this->titleOfCourtesy = $titleOfCourtesy;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getBirthDate(): ?\DateTimeInterface
    {
        return $this->birthDate;
    }

    /**
     * @param \DateTimeInterface|null $birthDate
     */
    public function setBirthDate(?\DateTimeInterface $birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getHireDate(): ?\DateTimeInterface
    {
        return $this->hireDate;
    }

    /**
     * @param \DateTimeInterface|null $hireDate
     */
    public function setHireDate(?\DateTimeInterface $hireDate): void
    {
        $this->hireDate = $hireDate;
    }

    /**
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @param string|null $address
     */
    public function setAddress(?string $address): void
    {
        $this->address = $address;
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string|null $city
     */
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    /**
     * @return string|null
     */
    public function getRegion(): ?string
    {
        return $this->region;
    }

    /**
     * @param string|null $region
     */
    public function setRegion(?string $region): void
    {
        $this->region = $region;
    }

    /**
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    /**
     * @param string|null $postalCode
     */
    public function setPostalCode(?string $postalCode): void
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param string|null $country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    /**
     * @return string|null
     */
    public function getHomePhone(): ?string
    {
        return $this->home_phone;
    }

    /**
     * @param string|null $home_phone
     */
    public function setHomePhone(?string $home_phone): void
    {
        $this->home_phone = $home_phone;
    }

    /**
     * @return string|null
     */
    public function getExtension(): ?string
    {
        return $this->extension;
    }

    /**
     * @param string|null $extension
     */
    public function setExtension(?string $extension): void
    {
        $this->extension = $extension;
    }

    /**
     * @return mixed|null
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param mixed|null $photo
     */
    public function setPhoto($photo): void
    {
        $this->photo = $photo;
    }

    /**
     * @return string|null
     */
    public function getNotes(): ?string
    {
        return $this->notes;
    }

    /**
     * @param string|null $notes
     */
    public function setNotes(?string $notes): void
    {
        $this->notes = $notes;
    }

    /**
     * @return EmployeeInterface|null
     */
    public function getReportsTo(): ?EmployeeInterface
    {
        return $this->reportsTo;
    }

    /**
     * @param EmployeeInterface|null $reportsTo
     */
    public function setReportsTo(?EmployeeInterface $reportsTo): void
    {
        $this->reportsTo = $reportsTo;
    }

    /**
     * @return string|null
     */
    public function getPhotoPath(): ?string
    {
        return $this->photoPath;
    }

    /**
     * @param string|null $photoPath
     */
    public function setPhotoPath(?string $photoPath): void
    {
        $this->photoPath = $photoPath;
    }
}
