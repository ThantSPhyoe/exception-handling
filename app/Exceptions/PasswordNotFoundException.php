<?php

namespace App\Exceptions;

use Exception;

class PasswordNotFoundException extends Exception
{
    public  $message = '';

    public $code = '';

    public function __construct($message = 'Please Insert Password', $code = 422)
    {
        $this->message = $message;
        $this->code = $code;
    }
}
