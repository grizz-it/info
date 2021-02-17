<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Info\Tests\Component;

use PHPUnit\Framework\TestCase;
use GrizzIt\Info\Component\Reference;

/**
 * @coversDefaultClass \GrizzIt\Info\Component\Reference
 */
class ReferenceTest extends TestCase
{
    /**
     * @covers ::__construct
     * @covers ::getRef
     * @covers ::setRef
     * @covers ::export
     *
     * @return void
     */
    public function testComponent(): void
    {
        $subject = new Reference('ref');

        $this->assertEquals('ref', $subject->getRef());
        $this->assertEquals(['$ref' => 'ref'], $subject->export());

        $subject->setRef('foo');
        $this->assertEquals('foo', $subject->getRef());
        $this->assertEquals(['$ref' => 'foo'], $subject->export());
    }
}
