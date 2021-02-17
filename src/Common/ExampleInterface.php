<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Info\Common;

use GrizzIt\Exportable\Common\ExportableComponentInterface;

interface ExampleInterface extends ExportableComponentInterface
{
    /**
     * Retrieves a short description of the example.
     *
     * @return string|null
     */
    public function getSummary(): ?string;

    /**
     * Sets the short description of the example.
     *
     * @param string|null $summary
     *
     * @return void
     */
    public function setSummary(?string $summary): void;

    /**
     * Retrieves the long description of the example.
     *
     * @return string|null
     */
    public function getDescription(): ?string;

    /**
     * Sets the long description of the example.
     *
     * @param string|null $description
     *
     * @return void
     */
    public function setDescription(?string $description): void;

    /**
     * Retrieves a literal value example.
     *
     * @return mixed
     */
    public function getValue();

    /**
     * Set a literal value example.
     *
     * @param mixed $value
     *
     * @return void
     */
    public function setValue($value): void;

    /**
     * Retrieves a URL pointing to an example.
     *
     * @return string|null
     */
    public function getExternalValue(): ?string;

    /**
     * Sets a URL pointing to an example.
     *
     * @param string|null $value
     *
     * @return void
     */
    public function setExternalValue(?string $value): void;
}
