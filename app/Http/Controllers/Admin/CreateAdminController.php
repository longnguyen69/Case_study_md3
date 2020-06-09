<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateAdminRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CreateAdminController extends Controller
{
    public function showFormCreate(){
        return view('admin.create');
    }

    public function create(CreateAdminRequest $request){
        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->address = $request->address;
        $user->save();
        return redirect()->route('admin.create');
    }
}
