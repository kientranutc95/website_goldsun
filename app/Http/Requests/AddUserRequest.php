<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddUserRequest extends FormRequest
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
            'name'=>'required|unique:users|max:255',
            'email' =>'required|unique:users|max:255',
            'fullname'=>'required|max:255',
            'password'=>'required|max:16|min:6',
            'cp_password'=> 'required|same:password',
        ];
    }


}
