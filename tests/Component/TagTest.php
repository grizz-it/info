<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Info\Tests\Component;

use GrizzIt\Info\Component\Tag;
use PHPUnit\Framework\TestCase;
use GrizzIt\Info\Common\ExternalDocumentationInterface;

/**
 * @coversDefaultClass \GrizzIt\Info\Component\Tag
 */
class TagTest extends TestCase
{
    /**
     * @covers ::__construct
     * @covers ::getName
     * @covers ::setName
     * @covers ::getDescription
     * @covers ::setDescription
     * @covers ::getExternalDocs
     * @covers ::setExternalDocs
     * @covers ::export
     *
     * @return void
     */
    public function testComponent(): void
    {
        $subject = new Tag('name');

        $this->assertEquals('name', $subject->getName());
        $this->assertEquals(null, $subject->getDescription());
        $this->assertEquals(null, $subject->getExternalDocs());
        $this->assertEquals(['name' => 'name'], $subject->export());

        $externalDocs = $this->createMock(ExternalDocumentationInterface::class);
        $externalDocs->expects(static::once())
            ->method('export')
            ->willReturn(['externalDocs']);
        $subject->setName('foo');
        $subject->setDescription('description');
        $subject->setExternalDocs($externalDocs);

        $this->assertEquals('foo', $subject->getName());
        $this->assertEquals('description', $subject->getDescription());
        $this->assertEquals($externalDocs, $subject->getExternalDocs());
        $this->assertEquals(
            [
                'name' => 'foo',
                'description' => 'description',
                'externalDocs' => ['externalDocs']
            ],
            $subject->export()
        );
    }
}
