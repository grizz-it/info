<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Info\Tests\Component;

use PHPUnit\Framework\TestCase;
use GrizzIt\Info\Component\License;

/**
 * @coversDefaultClass \GrizzIt\Info\Component\License
 */
class LicenseTest extends TestCase
{
    /**
     * @covers ::__construct
     * @covers ::getName
     * @covers ::setName
     * @covers ::getUrl
     * @covers ::setUrl
     * @covers ::export
     *
     * @return void
     */
    public function testComponent(): void
    {
        $subject = new License('name');

        $this->assertEquals('name', $subject->getName());
        $this->assertEquals(null, $subject->getUrl());
        $this->assertEquals(['name' => 'name'], $subject->export());

        $subject->setName('foo');
        $subject->setUrl('url');

        $this->assertEquals('foo', $subject->getName());
        $this->assertEquals('url', $subject->getUrl());
        $this->assertEquals(
            ['name' => 'foo', 'url' => 'url'],
            $subject->export()
        );
    }
}
