<?php

namespace Nautilus\Validator;

class Float extends Validator
{

    public function __construct($error = null, $value = null)
    {
        parent::__construct(
            $error ? $error : "Not valid float",
            $value
        );
    }

    public function validate()
    {
        return !!preg_match(
            '#^\-{0,1}[0-9]*\.[0-9]+$|^\-{0,1}[0-9]+$|^\-{0,1}[0-9]*\.$#',
            $this->getValue()
        );
    }
}
