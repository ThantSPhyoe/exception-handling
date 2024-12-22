<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler;
use Throwable;

class CustomException extends Handler
{
    public function render ($request, Throwable $exception){
        {
            if ($exception instanceof EmailNotFoundExcetpion) {
                return response()->json(['message' => $exception->getMessage()], 400);
            } elseif ($exception instanceof PasswordNotFoundException) {
                return response()->json(['message' => $exception->getMessage()], 400);
            } elseif ($exception instanceof PhoneNumberNotFoundException) {
                return response()->json(['message' => $exception->getMessage()], 400);
            }

            return parent::render($request, $exception);
        }
    }
}
