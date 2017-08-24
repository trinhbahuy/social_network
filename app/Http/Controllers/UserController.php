<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function postLogin(Request $request){
        $email = $request['email'];
        $password = $request['password'];
        if(Auth::attempt(['email'=>$email, 'password'=>$password]))
            return redirect('layout.dashboard');
    }

}
