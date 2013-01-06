<?php

namespace Nautilus\Validator;

interface ValidatorInterface
{

    public function validate();

    public function getErrors();
}