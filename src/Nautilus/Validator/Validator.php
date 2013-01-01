<?php

namespace Nautilus\Validator;

use Nautilus\Validator\ValidatorInterface;

abstract class Validator implements ValidatorInterface
{

    private $value;
    private $errors = array('undefined error');

    public function __construct($error = null, $value = null)
    {
        if ($error !== null) {
            $this->setErrorMessage($error);
        }
        if ($value !== null) {
            $this->setValue($value);
        }
    }

    public function setErrorMessage($error)
    {
        $this->errors = array($error);
    }

    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Value to validate.
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}