<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePassAdminRequest;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('admin.index', compact('user'));
    }

    public function showProfile()
    {
        $user = Auth::user();
        $currentUser = User::find($user->id);
        return view('admin.myProfile', compact('user'));
    }

    public function changePass($id)
    {
        $user = User::findOrFail($id);
        return view('admin.changePass', compact('user'));
    }

    public function updatePass(ChangePassAdminRequest $request, $id)
    {
        $user = User::find($id);
        if (Hash::check($request->oldPass, $user->password)){
            $user->password = Hash::make($request->newPass);
            $user->save();
            return redirect()->route('admin.index');
        }
        return back()->with('error', 'Wrong current password, try again');
    }
}
