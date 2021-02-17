<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Info\Common;

use GrizzIt\Exportable\Common\ExportableComponentInterface;

interface ReferenceInterface extends ExportableComponentInterface
{
    /**
     * Retrieves the reference URL.
     *
     * @return string
     */
    public function getRef(): string;

    /**
     * Sets the reference URL.
     *
     * @param string $ref
     *
     * @return void
     */
    public function setRef(string $ref): void;
}
