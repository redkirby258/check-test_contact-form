<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class UserController extends Controller
{
    public function showRegistrationForm(){
        return view('auth.register');
    }

    public function register(RegisterRequest $request){

    }


    public function login(RegisterRequest $request){
        $contact = $request->only(['name', 'email', 'password']);
        return view('auth.login',compact('contact'));
    }
}
