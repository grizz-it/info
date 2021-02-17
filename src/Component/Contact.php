<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Info\Component;

use GrizzIt\Info\Common\ContactInterface;

class Contact implements ContactInterface
{
    /**
     * Contains the name.
     *
     * @var string|null
     */
    private $name;

    /**
     * Contains the URL.
     *
     * @var string|null
     */
    private $url;

    /**
     * Contains the email.
     *
     * @var string|null
     */
    private $email;

    /**
     * Constructor.
     *
     * @param string|null $name
     * @param string|null $url
     * @param string|null $email
     */
    public function __construct(
        string $name = null,
        string $url = null,
        string $email = null
    ) {
        $this->name = $name;
        $this->url = $url;
        $this->email = $email;
    }

    /**
     * Retrieves the name of the contact.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets the name of the contact.
     *
     * @param string|null $name
     *
     * @return void
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Retrieves the URL to the homepage of the contact.
     *
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * Sets the URL to the homepage of the contact.
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
     * Retrieves the email address.
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Sets the email address.
     *
     * @param string|null $email
     *
     * @return void
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * Exports the object to a public facing definition.
     *
     * @return array
     */
    public function export()
    {
        return array_filter([
            'name' => $this->name,
            'url' => $this->url,
            'email' => $this->email
        ]);
    }
}
