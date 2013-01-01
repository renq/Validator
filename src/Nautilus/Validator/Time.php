<?php

namespace Nautilus\Validator;

class Time extends Validator
{

    public function __construct($error = null, $value = null)
    {
        parent::__construct(
            $error ? $error : "Invalid time",
            $value
        );
    }

    public function validate()
    {
        if (!preg_match('/^[0-9]{1,2}:[0-9]{1,2}:[0-9]{1,2}$/', $this->getValue())) return false;
        list($h, $m, $s) = explode(':', $this->getValue());
        if ($h >= 24) return false;
        if ($m >= 60) return false;
        if ($s >= 60) return false;
        return true;
    }
}
