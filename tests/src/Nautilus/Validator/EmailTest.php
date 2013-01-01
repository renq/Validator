<?php

namespace Nautilus\Validator\Tests;

use Nautilus\Validator\Email;

class EmailTest extends \PHPUnit_Framework_TestCase
{

    public function testFalses()
    {
        $validator = new Email();
        $validator->setValue('test');
        $this->assertFalse($validator->validate());

        $validator->setValue('localhost');
        $this->assertFalse($validator->validate());

        $validator->setValue('root');
        $this->assertFalse($validator->validate());

        $validator->setValue('root@localhost');
        $this->assertFalse($validator->validate());

        $validator->setValue('root@domain-not-found.ss');
        $this->assertFalse($validator->validate());

        $validator->setValue('człowiek_widmo@gmail.com');
        $this->assertFalse($validator->validate());

        $validator->setValue('czlowiek-widmo@gmail.com');
        $this->assertFalse($validator->validate());
    }

    public function testPositives()
    {
        $validator = new Email();
        $validator->setValue('spam@lipek.net');
        $this->assertTrue($validator->validate());

        $validator->setValue('some_user@gmail.com');
        $this->assertTrue($validator->validate());

        $validator->setValue('some.user@live.com');
        $this->assertTrue($validator->validate());
    }
}
