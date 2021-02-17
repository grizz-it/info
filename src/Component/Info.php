<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Info\Component;

use GrizzIt\Info\Common\InfoInterface;
use GrizzIt\Info\Common\ContactInterface;
use GrizzIt\Info\Common\LicenseInterface;

class Info implements InfoInterface
{
    /**
     * Contains the title.
     *
     * @var string
     */
    private $title;

    /**
     * Contains the description.
     *
     * @var string|null
     */
    private $description;

    /**
     * Contains the terms of service URL.
     *
     * @var string|null
     */
    private $termsOfService;

    /**
     * Contains the contact information.
     *
     * @var ContactInterface|null
     */
    private $contact;

    /**
     * Contains the license information.
     *
     * @var LicenseInterface|null
     */
    private $license;

    /**
     * Contains the version.
     *
     * @var string|null
     */
    private $version;

    /**
     * Constructor.
     *
     * @param string $title
     * @param string $version
     * @param string $description
     * @param string $termsOfService
     * @param ContactInterface $contact
     * @param LicenseInterface $license
     */
    public function __construct(
        string $title,
        string $version,
        string $description = null,
        string $termsOfService = null,
        ContactInterface $contact = null,
        LicenseInterface $license = null
    ) {
        $this->title = $title;
        $this->version = $version;
        $this->description = $description;
        $this->termsOfService = $termsOfService;
        $this->contact = $contact;
        $this->license = $license;
    }

    /**
     * Retrieves the title.
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Sets the title.
     *
     * @param string $title
     *
     * @return void
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * Retrieves the description.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets the description.
     *
     * @param string|null $description
     *
     * @return void
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * Retrieves the terms of service URL.
     *
     * @return string|null
     */
    public function getTermsOfService(): ?string
    {
        return $this->termsOfService;
    }

    /**
     * Sets the terms of service URL.
     *
     * @param string|null $termsOfService
     *
     * @return void
     */
    public function setTermsOfService(?string $termsOfService): void
    {
        $this->termsOfService = $termsOfService;
    }

    /**
     * Retrieves the contact information.
     *
     * @return ContactInterface|null
     */
    public function getContact(): ?ContactInterface
    {
        return $this->contact;
    }

    /**
     * Retrieves the contact information.
     *
     * @param ContactInterface|null $contact
     *
     * @return void
     */
    public function setContact(?ContactInterface $contact): void
    {
        $this->contact = $contact;
    }

    /**
     * Retrieves the license information.
     *
     * @return LicenseInterface|null
     */
    public function getLicense(): ?LicenseInterface
    {
        return $this->license;
    }

    /**
     * Retrieves the license information.
     *
     * @param LicenseInterface|null $license
     *
     * @return void
     */
    public function setLicense(?LicenseInterface $license): void
    {
        $this->license = $license;
    }

    /**
     * Retrieves the version.
     *
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * Sets the version.
     *
     * @param string $version
     *
     * @return void
     */
    public function setVersion(string $version): void
    {
        $this->version = $version;
    }

    /**
     * Exports the object to a public facing definition.
     *
     * @return array
     */
    public function export()
    {
        return array_filter([
            'title' => $this->title,
            'description' => $this->description,
            'termsOfService' => $this->termsOfService,
            'contact' => $this->contact === null ?
                null :
                $this->contact->export(),
            'license' => $this->license === null ?
                null :
                $this->license->export(),
            'version' => $this->version
        ]);
    }
}
