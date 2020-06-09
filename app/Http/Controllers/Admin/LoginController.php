<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function showFormLogin(){
        return view('admin.login');
    }
    public function login(LoginRequest $request){
        $userName = $request->username;
        $password = $request->password;
        $user = [
            'username'=>$userName,
            'password'=>$password
        ];

        if (Auth::attempt($user)){
            return redirect()->route('index.admin');
        } else {
            return back();
        }

    }
}
