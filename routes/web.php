<?php

use Illuminate\Support\Facades\Route;


Route::get('/','Frontend\HomeController@index')->name('index');
Route::get('login','Frontend\LoginController@login')->name('login');
Route::get('register','Frontend\RegisterController@register')->name('register');
Route::get('account','Frontend\AccountController@account')->name('account');

Route::group(['prefix' => 'cart'], function (){
        Route::get('add/{id}', 'CartController@add')->name('cart.add');
        Route::get('view', 'CartController@view')->name('cart.view');
        Route::get('remove/{id}', 'CartController@remove')->name('cart.remove');
        Route::get('clear', 'CartController@clear')->name('cart.clear');
        Route::get('update/{id}', 'CartController@update')->name('cart.update');
});

Route::group(['prefix' => 'checkout'], function (){
    Route::get('/','Frontend\CheckoutController@form')->name('checkout');
    Route::post('/','Frontend\CheckoutController@submit_form')->name('checkout');
    Route::get('/checkout-success','Frontend\CheckoutController@success')->name('checkout.success');
});

Route::prefix('admin')->group(function (){
    Route::get('create','Admin\CreateAdminController@showFormCreate')->name('admin.create');
    Route::post('create','Admin\CreateAdminController@create');
    Route::get('login','Admin\LoginController@showFormLogin')->name('admin.login');
    Route::post('login','Admin\LoginController@login')->name('login.admin');
    Route::middleware(['auth','checkAdmin'])->group(function (){
        Route::get('/','Admin\AdminController@index')->name('admin.index');
        Route::get('logout','Admin\LogoutController@logout')->name('admin.logout');
        Route::get('my-profile','Admin\AdminController@showProfile')->name('admin.showProfile');
        Route::get('{id}/change-password', 'Admin\AdminController@changePass')->name('admin.changePass');
        Route::post('{id}/change-password', 'Admin\AdminController@updatePass');
        Route::get('categories','Admin\AdminCategory@showCategories')->name('admin.showCategories');
        Route::get('{id}/edit-category','Admin\AdminCategory@edit')->name('admin.editCategory');
        Route::post('{id}/edit-category','Admin\AdminCategory@update')->name('admin.updateCategory');
        Route::get('create-category','Admin\AdminCategory@create')->name('admin.createCategory');
        Route::post('create-category','Admin\AdminCategory@store')->name('admin.storeCategory');
        Route::get('{id}/delete-category','Admin\AdminCategory@destroy')->name('admin.deleteCategory');
    });
});
