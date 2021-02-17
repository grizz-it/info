<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Info\Tests\Component;

use PHPUnit\Framework\TestCase;
use GrizzIt\Info\Component\Contact;

/**
 * @coversDefaultClass \GrizzIt\Info\Component\Contact
 */
class ContactTest extends TestCase
{
    /**
     * @covers ::__construct
     * @covers ::getName
     * @covers ::setName
     * @covers ::getUrl
     * @covers ::setUrl
     * @covers ::getEmail
     * @covers ::setEmail
     * @covers ::export
     *
     * @return void
     */
    public function testComponent(): void
    {
        $subject = new Contact();
        $this->assertEquals(null, $subject->getName());
        $this->assertEquals(null, $subject->getUrl());
        $this->assertEquals(null, $subject->getEmail());
        $this->assertEquals([], $subject->export());

        $subject->setName('name');
        $subject->setUrl('url');
        $subject->setEmail('email');

        $this->assertEquals('name', $subject->getName());
        $this->assertEquals('url', $subject->getUrl());
        $this->assertEquals('email', $subject->getEmail());

        $this->assertEquals(
            [
                'name' => 'name',
                'url' => 'url',
                'email' => 'email'
            ],
            $subject->export()
        );
    }
}
