<?php

namespace Nautilus\Validator\Tests;

use Nautilus\Validator\GreaterThan;

class GreaterThanTest extends \PHPUnit_Framework_TestCase
{

    public function testFalses()
    {
        $validator = new GreaterThan(10);
        $validator->setValue(9.99999);
        $this->assertFalse($validator->validate());

        $validator->setValue(-19);
        $this->assertFalse($validator->validate());

        $validator = new GreaterThan('bcd');
        $validator->setValue('abc');
        $this->assertFalse($validator->validate());
    }

    public function testPositives()
    {
        $validator = new GreaterThan(10);
        $validator->setValue(15);
        $this->assertTrue($validator->validate());

        $validator->setValue(19);
        $this->assertTrue($validator->validate());

        $validator = new GreaterThan('bcd');
        $validator->setValue('cde');
        $this->assertTrue($validator->validate());
    }
}
