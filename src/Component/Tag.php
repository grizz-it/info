<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Info\Component;

use GrizzIt\Info\Common\TagInterface;
use GrizzIt\Info\Common\ExternalDocumentationInterface;

class Tag implements TagInterface
{
    /**
     * Contains the name.
     *
     * @var string
     */
    private string $name;

    /**
     * Contains the description.
     *
     * @var string|null
     */
    private ?string $description;

    /**
     * Contains the external documentation.
     *
     * @var ExternalDocumentationInterface|null
     */
    private ?ExternalDocumentationInterface $externalDocs;

    /**
     * Constructor.
     *
     * @param string $name
     * @param string $description
     * @param ExternalDocumentationInterface $externalDocs
     */
    public function __construct(
        string $name,
        string $description = null,
        ExternalDocumentationInterface $externalDocs = null
    ) {
        $this->name = $name;
        $this->description = $description;
        $this->externalDocs = $externalDocs;
    }

    /**
     * Retrieves the name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets the name.
     *
     * @param string $name
     *
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
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
     * Retrieves the external documentation.
     *
     * @return ExternalDocumentationInterface|null
     */
    public function getExternalDocs(): ?ExternalDocumentationInterface
    {
        return $this->externalDocs;
    }

    /**
     * Sets the external documentation.
     *
     * @param ExternalDocumentationInterface|null $externalDocs
     *
     * @return void
     */
    public function setExternalDocs(
        ?ExternalDocumentationInterface $externalDocs
    ): void {
        $this->externalDocs = $externalDocs;
    }

    /**
     * Exports the object to a public facing definition.
     *
     * @return array
     */
    public function export(): mixed
    {
        return array_filter([
            'name' => $this->name,
            'description' => $this->description,
            'externalDocs' => $this->externalDocs === null ?
                null :
                $this->externalDocs->export()
        ]);
    }
}
