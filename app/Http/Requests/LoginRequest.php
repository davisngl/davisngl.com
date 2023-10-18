<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email'    => ['required', 'email', 'exists:users,email'],
            'password' => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
            'email.required'    => 'Email field is required',
            'email.email'       => 'Email must be a valid e-mail address',
            'email.exists'      => 'Incorrect email and/or password',
            'password.required' => 'Password field is required',
        ];
    }
}
