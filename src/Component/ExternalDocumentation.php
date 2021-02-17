<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Info\Component;

use GrizzIt\Info\Common\ExternalDocumentationInterface;

class ExternalDocumentation implements ExternalDocumentationInterface
{
    /**
     * Contains the URL.
     *
     * @var string
     */
    private $url;

    /**
     * Contains the description.
     *
     * @var string|null
     */
    private $description;

    /**
     * Constructor.
     *
     * @param string $url
     * @param string $description
     */
    public function __construct(
        string $url,
        string $description = null
    ) {
        $this->description = $description;
        $this->url = $url;
    }

    /**
     * Retrieves the URL.
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Sets the URL.
     *
     * @param string $url
     *
     * @return void
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
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
     * Exports the object to a public facing definition.
     *
     * @return array
     */
    public function export()
    {
        return array_filter([
            'url' => $this->url,
            'description' => $this->description
        ]);
    }
}
