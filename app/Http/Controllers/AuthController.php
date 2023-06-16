<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Services\AuthService;

class AuthController extends Controller
{
    public function __construct(public AuthService $service){}

    public function login()
    {
        return view('auth.login');
    }
    public function doLogin(LoginRequest $request)
    {
        $login = $this->service->login($request);
        if($login){
            return redirect()->route('dashboard');
        }
        return back()->with('error', 'No user has found!');
    }
    public function logout()
    {
        auth()->logout();
        return redirect('auth.login');
    }
}
