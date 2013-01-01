<?php

namespace Nautilus\Validator;

class Regex extends Validator
{

    private $regex;

    public function __construct($regex, $error = null, $value = null)
    {
        $this->regex = $regex;
        parent::__construct(
            $error ? $error : "Regular exception don't match to string",
            $value
        );
    }

    public function validate()
    {
        return preg_match($this->regex, $this->getValue()) ? true : false;
    }
}
