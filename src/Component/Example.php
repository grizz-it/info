<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Info\Component;

use GrizzIt\Info\Common\ExampleInterface;

class Example implements ExampleInterface
{
    /**
     * Contains the summary.
     *
     * @var string|null
     */
    private $summary;

    /**
     * Contains the description.
     *
     * @var string|null
     */
    private $description;

    /**
     * Contains the value.
     *
     * @var mixed
     */
    private $value;

    /**
     * Contains the external value.
     *
     * @var string|null
     */
    private $externalValue;

    /**
     * Constructor
     *
     * @param string $summary
     * @param string $description
     * @param mixed $value
     * @param string $externalValue
     */
    public function __construct(
        string $summary = null,
        string $description = null,
        $value = null,
        string $externalValue = null
    ) {
        $this->summary = $summary;
        $this->description = $description;
        $this->value = $value;
        $this->externalValue = $externalValue;
    }

    /**
     * Retrieves a short description of the example.
     *
     * @return string|null
     */
    public function getSummary(): ?string
    {
        return $this->summary;
    }

    /**
     * Sets the short description of the example.
     *
     * @param string|null $summary
     *
     * @return void
     */
    public function setSummary(?string $summary): void
    {
        $this->summary = $summary;
    }

    /**
     * Retrieves the long description of the example.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets the long description of the example.
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
     * Retrieves a literal value example.
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set a literal value example.
     *
     * @param mixed $value
     *
     * @return void
     */
    public function setValue($value): void
    {
        $this->value = $value;
    }

    /**
     * Retrieves a URL pointing to an example.
     *
     * @return string|null
     */
    public function getExternalValue(): ?string
    {
        return $this->externalValue;
    }

    /**
     * Sets a URL pointing to an example.
     *
     * @param string|null $value
     *
     * @return void
     */
    public function setExternalValue(?string $value): void
    {
        $this->externalValue = $value;
    }

    /**
     * Exports the object to a public facing definition.
     *
     * @return array
     */
    public function export()
    {
        return array_filter([
            'summary' => $this->summary,
            'description' => $this->description,
            'value' => $this->value,
            'externalValue' => $this->externalValue
        ]);
    }
}
