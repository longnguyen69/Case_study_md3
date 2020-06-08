<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showFormRegister(){
        return view('admin.register');
    }

    public function register(Request $request){
        $user = new User();
//        dd($user);
        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->address = $request->address;
        $user->save();
        return redirect()->route('showRegister');
    }
}
