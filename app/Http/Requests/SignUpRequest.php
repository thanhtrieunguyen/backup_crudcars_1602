<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
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
            'email' => 'unique:users|min:3|max:255',
            'password' => 'confirmed|min:6|max:255',
            'hoten' => 'min:3|max:255',
            'cccd' => 'unique:users|min:12|max:12',
            'sdt' => 'min:3|max:10',
            'diachi' => 'min:3|max:255',
            'ngaysinh' => 'required|date|',
        ];
    }

    public function messages()
    {
        return [
            'email.unique' => 'Email này đã có người sử dụng',
            'email.min' => 'Email ít nhất :min ký tự',
            'email.max' => 'Email nhiều nhất :max ký tự',
            'password.confirmed' => 'Nhập lại mật khẩu chưa đúng',
            'password.min' => 'Mật khẩu ít nhất :min ký tự',
            'password.max' => 'Mật khẩu nhiều nhất :max ký tự',
            'hoten.min' => 'Họ tên ít nhất :min ký tự',
            'hoten.max' => 'Họ tên nhiều nhất :max ký tự',
            'cccd.unique' => 'CCCD này đã tồn tại',
            'cccd.min' => 'CCCD phải có :min số',
            'cccd.max' => 'CCCD phải có :max số',
            'sdt.min' => 'Số điện thoại ít nhất :min ký tự',
            'sdt.max' => 'Số điện thoại nhiều nhất :max ký tự',
            'diachi.min' => 'Địa chỉ ít nhất :min ký tự',
            'diachi.max' => 'Địa chỉ nhiều nhất :max ký tự',
        ];
    }
}
