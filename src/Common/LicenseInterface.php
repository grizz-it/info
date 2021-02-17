<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Info\Common;

use GrizzIt\Exportable\Common\ExportableComponentInterface;

interface LicenseInterface extends ExportableComponentInterface
{
    /**
     * Retrieves the name.
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Sets the name.
     *
     * @param string $name
     *
     * @return void
     */
    public function setName(string $name): void;

    /**
     * Retrieves the URL.
     *
     * @return string|null
     */
    public function getUrl(): ?string;

    /**
     * Sets the URL.
     *
     * @param string|null $url
     *
     * @return void
     */
    public function setUrl(?string $url): void;
}
