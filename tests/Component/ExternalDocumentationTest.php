<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Info\Tests\Component;

use PHPUnit\Framework\TestCase;
use GrizzIt\Info\Component\ExternalDocumentation;

/**
 * @coversDefaultClass \GrizzIt\Info\Component\ExternalDocumentation
 */
class ExternalDocumentationTest extends TestCase
{
    /**
     * @covers ::__construct
     * @covers ::getDescription
     * @covers ::setDescription
     * @covers ::getUrl
     * @covers ::setUrl
     * @covers ::export
     *
     * @return void
     */
    public function testComponent(): void
    {
        $subject = new ExternalDocumentation('url');

        $this->assertEquals('url', $subject->getUrl());
        $this->assertEquals(null, $subject->getDescription());
        $this->assertEquals(['url' => 'url'], $subject->export());

        $subject->setUrl('foo');
        $subject->setDescription('description');

        $this->assertEquals('foo', $subject->getUrl());
        $this->assertEquals('description', $subject->getDescription());
        $this->assertEquals(
            [
                'url' => 'foo',
                'description' => 'description'
            ],
            $subject->export()
        );
    }
}
