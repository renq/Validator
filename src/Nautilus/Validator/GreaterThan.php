<?php

namespace Nautilus\Validator;

class GreaterThan extends Validator
{

    private $greaterThan;

    public function __construct($greaterThan, $error = null, $value = null)
    {
        parent::__construct(
            $error ? $error : "Not valid float",
            $value
        );
        $this->greaterThan = $greaterThan;
    }

    public function validate()
    {
        return $this->getValue() > $this->greaterThan;
    }
}
