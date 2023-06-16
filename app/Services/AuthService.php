<?php
namespace App\Services;

use Illuminate\Support\Facades\Auth;
class AuthService
{
    public function login($request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if(Auth::attempt($credentials)){
            return true;
        }
        return false;
    }
}
