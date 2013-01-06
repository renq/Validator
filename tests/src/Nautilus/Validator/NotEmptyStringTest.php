<?php

namespace Nautilus\Validator\Tests;

use Nautilus\Validator\NotEmptyString;

class NotEmptyStringTest extends \PHPUnit_Framework_TestCase
{

    public function testPositives()
    {
        $validator = new NotEmptyString();
        $validator->setValue('test');
        $this->assertFalse($validator->validate());

        $validator->setValue('0');
        $this->assertFalse($validator->validate());

        $validator->setValue(0);
        $this->assertFalse($validator->validate());
    }

    public function testFalses()
    {
        $validator = new NotEmptyString();
        $validator->setValue('');
        $this->assertTrue($validator->validate());
    }
}
