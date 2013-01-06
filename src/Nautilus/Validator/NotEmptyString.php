<?php

namespace Nautilus\Validator;

class NotEmptyString extends Validator
{

    public function __construct($error = null, $value = null)
    {
        parent::__construct(
            $error ? $error : "Enter some text",
            $value
        );
    }

    public function validate()
    {
        return (string)$this->getValue() !== '';
    }
}
