<?php

namespace Nautilus\Validator\Tests;

use Nautilus\Validator\Integer;

class IntegerTest extends \PHPUnit_Framework_TestCase
{

    public function testFalses()
    {
        $validator = new Integer();
        $validator->setValue('test');
        $this->assertFalse($validator->validate());

        $validator->setValue('1212t');
        $this->assertFalse($validator->validate());

        $validator->setValue('  11');
        $this->assertFalse($validator->validate());

        $validator->setValue('12.');
        $this->assertFalse($validator->validate());

        $validator->setValue('1.1');
        $this->assertFalse($validator->validate());

        $validator->setValue('[3]');
        $this->assertFalse($validator->validate());
    }

    public function testPositives()
    {
        $validator = new Integer();
        $validator->setValue('121');
        $this->assertTrue($validator->validate());

        $validator->setValue('-98');
        $this->assertTrue($validator->validate());

        $validator->setValue('981912919919289819238912839182918239');
        $this->assertTrue($validator->validate());

        $validator->setValue('0');
        $this->assertTrue($validator->validate());
    }
}
