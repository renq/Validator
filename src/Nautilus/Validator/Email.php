<?php

namespace Nautilus\Validator;

class Email extends Validator
{

    public function __construct($error = null, $value = null)
    {
        parent::__construct(
            $error ? $error : "Invalid e-mail address",
            $value
        );
    }

    public function validate()
    {
        $wholeexp = '/^(.+?)@(([a-z0-9\.-]+?)\.[a-z]{2,6})$/i';
        $userexp = "/^[a-z0-9\~\!\#\$\%\&\(\)\_\+\=\[\]\;\:\'\"\,\.\/]+$/i";
        if (preg_match($wholeexp, $this->getValue(), $regs)) {
            $username = $regs[1];
            $host = $regs[2];
            if (function_exists('checkdnsrr')) {
                if (checkdnsrr($host, 'MX')) {
                    if (preg_match($userexp, $username)) {
                        return true;
                    }
                }
            }
        }
        return false;
    }
}
