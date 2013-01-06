<?php

namespace Nautilus\Validator;

interface ValidatorInterface
{

    public function validate();

    public function setValue($value);

    public function getValue();

    public function getErrors();
}