<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'min:3|max:255',
            'password' => 'min:6|max:255',
        ];
    }

    public function messages() {
        return [
                'email.min' => 'Email ít nhất :min ký tự',
                'email.max' => 'Email nhiều nhất :max ký tự',
                'password.min' => 'Mật khẩu ít nhất :min ký tự',
                'password.max' => 'Mật khẩu nhiều nhất :max ký tự',
        ];
    }
}
