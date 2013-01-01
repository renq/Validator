<?php

namespace Nautilus\Validator;

class Integer extends Validator
{

    public function __construct($error = null, $value = null)
    {
        parent::__construct(
            $error ? $error : "Not valid integer",
            $value
        );
    }

    public function validate()
    {
        return preg_match('/^\-{0,1}[0-9]+$/', $this->getValue()) ? true : false;
    }
}
