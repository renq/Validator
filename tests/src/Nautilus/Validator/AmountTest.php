<?php

namespace Nautilus\Validator\Tests;

use Nautilus\Validator\Amount;

class AmountTest extends \PHPUnit_Framework_TestCase
{

    public function testFalses()
    {
        $validator = new Amount();
        $validator->setValue('test');
        $this->assertFalse($validator->validate());

        $validator->setValue('1212t');
        $this->assertFalse($validator->validate());

        $validator->setValue('  11');
        $this->assertFalse($validator->validate());

        $validator->setValue('12.23.2');
        $this->assertFalse($validator->validate());

        $validator->setValue('1,1');
        $this->assertFalse($validator->validate());

        $validator->setValue('[3]');
        $this->assertFalse($validator->validate());

        $validator->setValue('1.1');
        $this->assertFalse($validator->validate());

        $validator->setValue('1.111');
        $this->assertFalse($validator->validate());
    }

    public function testPositives()
    {
        $validator = new Amount();
        $validator->setValue('121');
        $this->assertTrue($validator->validate());

        $validator->setValue('-98');
        $this->assertTrue($validator->validate());

        $validator->setValue('111.10');
        $this->assertTrue($validator->validate());

        $validator->setValue('-01.29');
        $this->assertTrue($validator->validate());
    }
}
