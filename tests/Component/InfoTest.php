<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Info\Tests\Component;

use PHPUnit\Framework\TestCase;
use GrizzIt\Info\Component\Info;
use GrizzIt\Info\Common\ContactInterface;
use GrizzIt\Info\Common\LicenseInterface;

/**
 * @coversDefaultClass \GrizzIt\Info\Component\Info
 */
class InfoTest extends TestCase
{
    /**
     * @covers ::__construct
     * @covers ::getTitle
     * @covers ::setTitle
     * @covers ::getDescription
     * @covers ::setDescription
     * @covers ::getTermsOfService
     * @covers ::setTermsOfService
     * @covers ::getContact
     * @covers ::setContact
     * @covers ::getLicense
     * @covers ::setLicense
     * @covers ::getVersion
     * @covers ::setVersion
     * @covers ::export
     *
     * @return void
     */
    public function testComponent(): void
    {
        $subject = new Info('title', '1.0.0');

        $this->assertEquals('title', $subject->getTitle());
        $this->assertEquals(null, $subject->getDescription());
        $this->assertEquals(null, $subject->getTermsOfService());
        $this->assertEquals(null, $subject->getContact());
        $this->assertEquals(null, $subject->getLicense());
        $this->assertEquals('1.0.0', $subject->getVersion());
        $this->assertEquals(
            [
                'title' => 'title',
                'version' => '1.0.0'
            ],
            $subject->export()
        );

        $contact = $this->createMock(ContactInterface::class);
        $contact->expects(static::once())
            ->method('export')
            ->willReturn(['contact']);
        $license = $this->createMock(LicenseInterface::class);
        $license->expects(static::once())
            ->method('export')
            ->willReturn(['license']);

        $subject->setTitle('foo');
        $subject->setDescription('description');
        $subject->setTermsOfService('termsOfService');
        $subject->setContact($contact);
        $subject->setLicense($license);
        $subject->setVersion('1.1.0');

        $this->assertEquals(
            [
                'title' => 'foo',
                'description' => 'description',
                'termsOfService' => 'termsOfService',
                'contact' => ['contact'],
                'license' => ['license'],
                'version' => '1.1.0'
            ],
            $subject->export()
        );
    }
}
