<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Info\Common;

use GrizzIt\Exportable\Common\ExportableComponentInterface;

interface ContactInterface extends ExportableComponentInterface
{
    /**
     * Retrieves the name of the contact.
     *
     * @return string|null
     */
    public function getName(): ?string;

    /**
     * Sets the name of the contact.
     *
     * @param string|null $name
     *
     * @return void
     */
    public function setName(?string $name): void;

    /**
     * Retrieves the URL to the homepage of the contact.
     *
     * @return string|null
     */
    public function getUrl(): ?string;

    /**
     * Sets the URL to the homepage of the contact.
     *
     * @param string|null $url
     *
     * @return void
     */
    public function setUrl(?string $url): void;

    /**
     * Retrieves the email address.
     *
     * @return string|null
     */
    public function getEmail(): ?string;

    /**
     * Sets the email address.
     *
     * @param string|null $email
     *
     * @return void
     */
    public function setEmail(?string $email): void;
}
