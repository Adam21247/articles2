<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function loginUser(LoginRequest $request){
        //TODO
    }


}
