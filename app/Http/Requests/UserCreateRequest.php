<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserCreateRequest extends FormRequest
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
            'hoten' => 'min:3|max:255',
            'cccd' => 'unique:users|min:12|max:12',
            'sdt' => 'unique:users|size:10',
            'diachi' => 'max:255',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            back()
                ->withErrors($validator)
                ->withInput()
                ->with(['error_register' => 'Loi dang ky'])
        );
    }

    public function messages()
    {
        return [
            'email.unique' => 'Email này đã có người sử dụng',
            'email.min' => 'Email ít nhất :min ký tự',
            'email.max' => 'Email nhiều nhất :max ký tự',
            'hoten.min' => 'Họ tên ít nhất :min ký tự',
            'hoten.max' => 'Họ tên nhiều nhất :max ký tự',
            'cccd.unique' => 'CCCD này đã tồn tại',
            'cccd.min' => 'CCCD ít nhất :min ký tự',
            'cccd.max' => 'CCCD nhiều nhất :max ký tự',
            'sdt.size' => 'Số điện thoại phải có :size ký tự',
            'sdt.unique' => 'Số điện thoại này đã có người sử dụng',
            'diachi.max' => 'Địa chỉ nhiều nhất :max ký tự',
        ];
    }
}
