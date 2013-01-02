<?php

namespace Nautilus\Validator;

class Amount extends Validator
{

    public function __construct($error = null, $value = null)
    {
        parent::__construct(
            $error ? $error : "Not valid amount",
            $value
        );
    }

    public function validate()
    {
        return !!preg_match(
            '#^\-{0,1}[0-9]*\.[0-9]{2}$|^\-{0,1}[0-9]+$|^\-{0,1}[0-9]*$#',
            $this->getValue()
        );
    }
}
