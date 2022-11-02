<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6',
                'password_confirmation' => 'required|same:password',            
        ];
        
    }

    public function messages()
    {
        return[
                'name.required' => 'Name is required',
                'email.required' => 'Email is required',
                'email.email' => 'Email is invalid',
                'email.unique' => 'Email is already exists',
                'password.required' => 'Password is required',
                'password.min' => 'Password is at least 6 characters',
                'password_confirmation.required' => 'Password confirmation is required',
                'password_confirmation.same' => 'Password confirmation is not match',
        ];
    }
}
