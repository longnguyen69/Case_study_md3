<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|unique:users,username',
            'email'=> 'required|email|unique:users,email',
            'phone' => 'required|min:10|max:12',
            'address' => 'required',
            'password' => 'required|min:6|max:32',
            'confirmPass' => 'required|same:password'
        ];
    }
}
