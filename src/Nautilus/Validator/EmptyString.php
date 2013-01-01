<?php

namespace Nautilus\Validator;

class EmptyString extends Validator
{

    public function __construct($error = null, $value = null)
    {
        parent::__construct(
            $error ? $error : "This is not empty string",
            $value
        );
    }

    public function validate()
    {
        return $this->getValue() === '';
    }
}
