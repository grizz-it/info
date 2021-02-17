<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Info\Common;

use GrizzIt\Exportable\Common\ExportableComponentInterface;

interface InfoInterface extends ExportableComponentInterface
{
    /**
     * Retrieves the title.
     *
     * @return string
     */
    public function getTitle(): string;

    /**
     * Sets the title.
     *
     * @param string $title
     *
     * @return void
     */
    public function setTitle(string $title): void;

    /**
     * Retrieves the description.
     *
     * @return string|null
     */
    public function getDescription(): ?string;

    /**
     * Sets the description.
     *
     * @param string|null $description
     *
     * @return void
     */
    public function setDescription(?string $description): void;

    /**
     * Retrieves the terms of service URL.
     *
     * @return string|null
     */
    public function getTermsOfService(): ?string;

    /**
     * Sets the terms of service URL.
     *
     * @param string|null $termsOfService
     *
     * @return void
     */
    public function setTermsOfService(?string $termsOfService): void;

    /**
     * Retrieves the contact information.
     *
     * @return ContactInterface|null
     */
    public function getContact(): ?ContactInterface;

    /**
     * Retrieves the contact information.
     *
     * @param ContactInterface|null $contact
     *
     * @return void
     */
    public function setContact(?ContactInterface $contact): void;

    /**
     * Retrieves the license information.
     *
     * @return LicenseInterface|null
     */
    public function getLicense(): ?LicenseInterface;

    /**
     * Retrieves the license information.
     *
     * @param LicenseInterface|null $license
     *
     * @return void
     */
    public function setLicense(?LicenseInterface $license): void;

    /**
     * Retrieves the version.
     *
     * @return string
     */
    public function getVersion(): string;

    /**
     * Sets the version.
     *
     * @param string $version
     *
     * @return void
     */
    public function setVersion(string $version): void;
}
