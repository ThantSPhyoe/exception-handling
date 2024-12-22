<?php

namespace App\Http\Controllers;

use App\Exceptions\EmailNotFoundExcetpion;
use App\Exceptions\PasswordNotFoundException;
use App\Exceptions\PhoneNumberNotFoundException;
use App\Services\UserServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{

    public function __construct(private readonly UserServices $userServices)
    {}

    public function store(Request $request){
        $array = $request->all();
        try {
            $user = $this->userServices->createUser($array);
            return response()->json($user, 200);
        }
        catch (\Exception $e) {
            Log::info($e->getMessage());
            return response()->json(['message' => 'server error'], 500);
        }
    }
}
