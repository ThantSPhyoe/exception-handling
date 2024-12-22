<?php

namespace App\Services;

use App\Models\User;
use App\Exceptions\EmailNotFoundExcetpion;
use App\Exceptions\PasswordNotFoundException;
use App\Exceptions\PhoneNumberNotFoundException;

class UserServices
{
    public function createUser($array){

        if ($array['name'] == null) {
            throw new PhoneNumberNotFoundException();
        }

        if ($array['email'] == null) {
            throw new EmailNotFoundExcetpion();
        }

        if ($array['password'] == null) {
            throw new PasswordNotFoundException();
        }

        $user = new User();
        $user->name = $array['name'];
        $user->email = $array['email'];
        $user->password = $array['password'];
        $user->save();
        return $user;
    }
}
