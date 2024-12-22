<?php

namespace App\Exceptions;

use Exception;

class PhoneNumberNotFoundException extends Exception
{
    public  $message = '';

    public $code = '';

    public function __construct($message = 'Please Insert Name', $code = 422)
    {
        $this->message = $message;
        $this->code = $code;
    }
}
