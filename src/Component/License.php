<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Info\Component;

use GrizzIt\Info\Common\LicenseInterface;

class License implements LicenseInterface
{
    /**
     * Contains the name.
     *
     * @var string
     */
    private string $name;

    /**
     * Contains the URL.
     *
     * @var string|null
     */
    private ?string $url;

    /**
     * Constructor.
     *
     * @param string $name
     * @param string $url
     */
    public function __construct(string $name, string $url = null)
    {
        $this->name = $name;
        $this->url = $url;
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
     * Retrieves the URL.
     *
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * Sets the URL.
     *
     * @param string|null $url
     *
     * @return void
     */
    public function setUrl(?string $url): void
    {
        $this->url = $url;
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
            'url' => $this->url
        ]);
    }
}
