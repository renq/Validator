<?php

namespace Nautilus\Validator;

class Date extends Validator
{

    public function __construct($error = null, $value = null)
    {
        parent::__construct(
            $error ? $error : "Invalid date",
            $value
        );
    }

    public function validate()
    {
        if (!preg_match('/^[0-9]{4}-[0-9]{1,2}-[0-9]{1,2}$/', $this->getValue())) return false;
        list($y, $m, $d) = explode('-', $this->getValue());
        return checkdate($m, $d, $y);
    }
}
