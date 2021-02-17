<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Info\Component;

use GrizzIt\Info\Common\ReferenceInterface;

class Reference implements ReferenceInterface
{
    /**
     * Contains the reference.
     *
     * @var string
     */
    private $ref;

    /**
     * Contstructor.
     *
     * @param string $ref
     */
    public function __construct(string $ref)
    {
        $this->ref = $ref;
    }

    /**
     * Retrieves the reference URL.
     *
     * @return string
     */
    public function getRef(): string
    {
        return $this->ref;
    }

    /**
     * Sets the reference URL.
     *
     * @param string $ref
     *
     * @return void
     */
    public function setRef(string $ref): void
    {
        $this->ref = $ref;
    }

    /**
     * Exports the object to a public facing definition.
     *
     * @return array
     */
    public function export()
    {
        return [
            '$ref' => $this->ref
        ];
    }
}
