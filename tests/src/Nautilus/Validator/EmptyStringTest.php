<?php

namespace Nautilus\Validator\Tests;

use Nautilus\Validator\EmptyString;

class EmptyStringTest extends \PHPUnit_Framework_TestCase
{

    public function testFalses()
    {
        $validator = new EmptyString();
        $validator->setValue('test');
        $this->assertFalse($validator->validate());

        $validator->setValue('0');
        $this->assertFalse($validator->validate());

        $validator->setValue(0);
        $this->assertFalse($validator->validate());
    }

    public function testPositives()
    {
        $validator = new EmptyString();
        $validator->setValue('');
        $this->assertTrue($validator->validate());
    }
}
