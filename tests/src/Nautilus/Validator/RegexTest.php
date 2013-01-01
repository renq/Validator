<?php

namespace Nautilus\Validator\Tests;

use Nautilus\Validator\Regex;

class RegexTest extends \PHPUnit_Framework_TestCase
{

    public function testFalses()
    {
        $validator = new Regex('/[0-9]+/');
        $validator->setValue('test');
        $this->assertFalse($validator->validate());
    }

    public function testPositives()
    {
        $validator = new Regex('/[0-9]+/');
        $validator->setValue('666');
        $this->assertTrue($validator->validate());

        $validator->setValue(777);
        $this->assertTrue($validator->validate());
    }
}
