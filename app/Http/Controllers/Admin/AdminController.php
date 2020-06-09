<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('admin.index',compact('user'));
    }

    public function showProfile()
    {
        $user = Auth::user();
        $currentUser = User::find($user->id);
        return view('admin.myProfile', compact('user'));
    }
}
