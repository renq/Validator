<?php

namespace Nautilus\Validator\Tests;

use Nautilus\Validator\NotEmptyString;

class NotEmptyStringTest extends \PHPUnit_Framework_TestCase
{

    public function testPositives()
    {
        $validator = new NotEmptyString();
        $validator->setValue('test');
        $this->assertTrue($validator->validate());

        $validator->setValue('0');
        $this->assertTrue($validator->validate());

        $validator->setValue(0);
        $this->assertTrue($validator->validate());
    }

    public function testFalses()
    {
        $validator = new NotEmptyString();
        $validator->setValue('');
        $this->assertFalse($validator->validate());
    }
}
