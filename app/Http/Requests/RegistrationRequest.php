<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;


class RegistrationRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:3|max:12'
        ];
    }

    public function messages()
    {
        return [

            'email.unique' => trans('validation.email_unique'),
            'email.required' => trans('validation.email_required'),
            'name.required' => trans('validation.name_required'),
            'password.min' => trans('validation.password_min'),
            'password.max' => trans('validation.password_max'),
            'password.required' => trans('validation.password_required'),

        ];


    }
}




