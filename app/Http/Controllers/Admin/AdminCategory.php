<?php

namespace App\Http\Controllers\Admin;

use App\AdminCategories;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminCategory extends Controller
{
    public function showCategories(){
        $user = Auth::user();
        $categories = AdminCategories::all();
        return view('admin.categories.index',compact('user','categories'));
    }

    public function create(){
        $user = Auth::user();
        return view('admin.categories.create',compact('user'));
    }

    public function store(UpdateCategory $request){
        $category = new AdminCategories();
        $category->name = $request->name;
        $category->save();
        Session::flash('success','Add Completed');
        return redirect()->route('admin.createCategory');
    }

    public function edit($id_category){
        $user = Auth::user();
        $category = AdminCategories::find($id_category);
        return view('admin.categories.edit',compact('user','category'));
    }

    public function update(UpdateCategory $request,$id_category){
        $category = AdminCategories::find($id_category);
        $category->name = $request->name;
        $category->save();
        Session::flash('success','Edit Completed');
        return redirect()->route('admin.showCategories');
    }

    public function destroy($id_category){
        $category = AdminCategories::find($id_category);
        $category->delete();
        Session::flash('success','Delete Completed');
        return redirect()->route('admin.showCategories');
    }
}
