<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Info\Common;

use GrizzIt\Exportable\Common\ExportableComponentInterface;

interface ExternalDocumentationInterface extends ExportableComponentInterface
{
    /**
     * Retrieves the URL.
     *
     * @return string
     */
    public function getUrl(): string;

    /**
     * Sets the URL.
     *
     * @param string $url
     *
     * @return void
     */
    public function setUrl(string $url): void;

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
}
