<?php

namespace Nautilus\Validator\Tests;

use Nautilus\Validator\Time;

class TimeTest extends \PHPUnit_Framework_TestCase
{

    public function testFalses()
    {
        $validator = new Time();
        $validator->setValue('test');
        $this->assertFalse($validator->validate());

        $validator->setValue('-1:11:11');
        $this->assertFalse($validator->validate());

        $validator->setValue('23:-1:20');
        $this->assertFalse($validator->validate());

        $validator->setValue('00:60:20');
        $this->assertFalse($validator->validate());

        $validator->setValue('24:00:10');
        $this->assertFalse($validator->validate());

        $validator->setValue('11:60:00');
        $this->assertFalse($validator->validate());

        $validator->setValue('120000');
        $this->assertFalse($validator->validate());

        $validator->setValue('10:10:60');
        $this->assertFalse($validator->validate());
    }

    public function testPositives()
    {
        $validator = new Time();
        $validator->setValue('00:00:00');
        $this->assertTrue($validator->validate());

        $validator->setValue('23:59:00');
        $this->assertTrue($validator->validate());
    }
}
