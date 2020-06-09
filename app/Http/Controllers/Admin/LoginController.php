<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showFormLogin(){
        return view('admin.login');
    }

    public function login(AdminLoginRequest $request){
        $userName = $request->username;
        $password = $request->password;
        $user = [
            'username'=> $userName,
            'password'=> $password
        ];

        if (Auth::attempt($user)){
            return redirect()->route('admin.index');
        } else {
            return abort(403);
        }
    }
}
