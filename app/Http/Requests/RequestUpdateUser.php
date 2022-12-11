<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestUpdateUser extends FormRequest
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
            'name' => "required|min:3|max:30",
            'lastname' => "required|min:3|max:30",
            'email' => "email|required",
            'role' => "required|in:client,seller,admin",
        ];
    }
    public function message()
    {
        return [
            'name.required' => 'El campo nombre es requerido compa'
        ];
    }
}
