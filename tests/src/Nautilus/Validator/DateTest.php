<?php

namespace Nautilus\Validator\Tests;

use Nautilus\Validator\Date;

class DateTest extends \PHPUnit_Framework_TestCase
{

    public function testFalses()
    {
        $validator = new Date();
        $validator->setValue('test');
        $this->assertFalse($validator->validate());

        $validator->setValue('2012-01-32');
        $this->assertFalse($validator->validate());

        $validator->setValue('2012-02-30');
        $this->assertFalse($validator->validate());

        $validator->setValue('20120230');
        $this->assertFalse($validator->validate());

        $validator->setValue('2012-10-10 11:11:11');
        $this->assertFalse($validator->validate());

        $validator->setValue('0000-00-00');
        $this->assertFalse($validator->validate());
    }

    public function testPositives()
    {
        $validator = new Date();
        $validator->setValue('2012-05-04');
        $this->assertTrue($validator->validate());

        $validator->setValue('2012-5-4');
        $this->assertTrue($validator->validate());
    }
}
