<?php

namespace Nautilus\Validator;

class DateTime extends Validator
{

    public function __construct($error = null, $value = null)
    {
        parent::__construct(
            $error ? $error : "Enter correct date.",
            $value
        );
    }

    /**
     * TODO use Date object to check date
     * (non-PHPdoc)
     * @see Nautilus\Validator.ValidatorInterface::validate()
     */
    public function validate()
    {
        if (!preg_match('/^[0-9]{4}-[0-9]{1,2}-[0-9]{1,2} [0-9]{1,2}:[0-9]{2}|[0-9]{4}-[0-9]{1,2}-[0-9]{1,2} [0-9]{1,2}:[0-9]{2}:[0-9]{2}$/', $this->getValue())) {
            return false;
        }
        list($date, $time) = explode(' ', $this->getValue());
        $dateValidator = new Date(null, $date);
        $timeValidator = new Time(null, $time);
        return $dateValidator->validate() && $timeValidator->validate();
    }
}
