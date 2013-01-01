<?php

namespace Nautilus\Validator\Tests;

use Nautilus\Validator\Float;

class FloatTest extends \PHPUnit_Framework_TestCase
{

    public function testFalses()
    {
        $validator = new Float();
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
    }

    public function testPositives()
    {
        $validator = new Float();
        $validator->setValue('121');
        $this->assertTrue($validator->validate());

        $validator->setValue('-98');
        $this->assertTrue($validator->validate());

        $validator->setValue('111.1');
        $this->assertTrue($validator->validate());

        $validator->setValue('-01.2999');
        $this->assertTrue($validator->validate());
    }
}
