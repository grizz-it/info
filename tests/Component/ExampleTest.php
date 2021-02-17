<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Info\Tests\Component;

use PHPUnit\Framework\TestCase;
use GrizzIt\Info\Component\Example;

/**
 * @coversDefaultClass \GrizzIt\Info\Component\Example
 */
class ExampleTest extends TestCase
{
    /**
     * @covers ::__construct
     * @covers ::getSummary
     * @covers ::setSummary
     * @covers ::getDescription
     * @covers ::setDescription
     * @covers ::getValue
     * @covers ::setValue
     * @covers ::getExternalValue
     * @covers ::setExternalValue
     * @covers ::export
     *
     * @return void
     */
    public function testComponent(): void
    {
        $subject = new Example();
        $this->assertEquals(null, $subject->getSummary());
        $this->assertEquals(null, $subject->getDescription());
        $this->assertEquals(null, $subject->getValue());
        $this->assertEquals(null, $subject->getExternalValue());
        $this->assertEquals([], $subject->export());

        $subject->setSummary('summary');
        $subject->setDescription('description');
        $subject->setValue('value');
        $subject->setExternalValue('externalValue');

        $this->assertEquals('summary', $subject->getSummary());
        $this->assertEquals('description', $subject->getDescription());
        $this->assertEquals('value', $subject->getValue());
        $this->assertEquals('externalValue', $subject->getExternalValue());
        $this->assertEquals(
            [
                'summary' => 'summary',
                'description' => 'description',
                'value' => 'value',
                'externalValue' => 'externalValue'
            ],
            $subject->export()
        );
    }
}
