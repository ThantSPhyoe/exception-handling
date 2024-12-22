<?php

namespace App\Exceptions;

use Exception;

class EmailNotFoundExcetpion extends Exception
{
    public  $message = '';

    public $code = '';

    public function __construct($message = 'Please Insert Email', $code = 422)
    {
        $this->message = $message;
        $this->code = $code;
    }
}
