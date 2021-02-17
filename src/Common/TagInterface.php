<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Info\Common;

use GrizzIt\Exportable\Common\ExportableComponentInterface;

interface TagInterface extends ExportableComponentInterface
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
     * Retrieves the external documentation.
     *
     * @return ExternalDocumentationInterface|null
     */
    public function getExternalDocs(): ?ExternalDocumentationInterface;

    /**
     * Sets the external documentation.
     *
     * @param ExternalDocumentationInterface|null $externalDocs
     *
     * @return void
     */
    public function setExternalDocs(
        ?ExternalDocumentationInterface $externalDocs
    ): void;
}
