<?php

namespace Nautilus\Validator\Tests;

use Nautilus\Validator\DateTime;

class DateTimeTest extends \PHPUnit_Framework_TestCase
{

    public function testFalses()
    {
        $validator = new DateTime();

        $validator->setValue('test');
        $this->assertFalse($validator->validate());

        $validator->setValue('2012-01-32');
        $this->assertFalse($validator->validate());

        $validator->setValue('2012-02-30');
        $this->assertFalse($validator->validate());

        $validator->setValue('20120230');
        $this->assertFalse($validator->validate());

        $validator->setValue('2012-13-10 11:11:11');
        $this->assertFalse($validator->validate());

        $validator->setValue('2012-10-10 11:60:11');
        $this->assertFalse($validator->validate());

        $validator->setValue('0000-00-00');
        $this->assertFalse($validator->validate());
    }

    public function testPositives()
    {
        $validator = new DateTime();

        $validator->setValue('2012-10-10 11:11:11');
        $this->assertTrue($validator->validate());
    }
}
