<?php

namespace Nautilus\Validator\Tests;

use Nautilus\Validator\Integer;

class ValidatorTest extends \PHPUnit_Framework_TestCase
{

    public function testErrors()
    {
        $validator = new Integer();
        $validator->setValue('test');
        $this->assertFalse($validator->validate());

        $this->assertTrue(is_array($validator->getErrors()));
        $this->assertTrue(count($validator->getErrors()) > 0);
    }

    public function testSetError()
    {
        $validator = new Integer();
        $validator->setErrorMessage("My custom error");
        $validator->validate();
        $this->assertEquals(
            array("My custom error"),
            $validator->getErrors()
        );
    }

    /*
    public function testErrorsBeforeValidation()
    {
        $validator = new Integer();
        $this->assertEmpty($validator->getErrors());
    }*/
}
