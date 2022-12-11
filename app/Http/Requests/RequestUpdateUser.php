<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

use function PHPUnit\Framework\isNull;

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
    public function rules($user)
    {
        $values = [
            'name' => "required|min:3|max:30",
            'lastname' => "required|min:3|max:30",
            // 'email' => "email|required|unique:users,email," . $user->id, //FORMA 001
            'email' => ["email", "required", Rule::unique('users', 'email')->ignore($user)],
            'role' => "required|in:client,seller,admin",
            // 'password' => 'required|confirmed'
        ];
        if ($user == 'null') {
            $validation_password = ['password' => 'required|confirmed'];
            $values = array_merge($values, $validation_password);
        }
        return $values;
    }
    public function message()
    {
        return [
            'name.required' => 'El campo nombre es requerido compa'
        ];
    }
}
