<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;


class UserUpdateRequest extends FormRequest
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
        $userId = $this->route('user');
        return
            [
                'hoten' => 'min:3|max:255',
                'cccd' => [
                    'min:12',
                    'max:12',
                    Rule::unique('users')->ignore($userId, 'iduser'),
                ],
                'sdt' => [
                    'size:10',
                    Rule::unique('users')->ignore($userId, 'iduser'),
                ],
                'diachi' => 'min:3|max:255',
            ];
    }

    public function messages()
    {
        return [
            'hoten.min' => 'Họ tên ít nhất :min ký tự',
            'hoten.max' => 'Họ tên nhiều nhất :max ký tự',
            'cccd.unique' => 'CCCD này đã tồn tại',
            'cccd.min' => 'CCCD phải có :min ký tự',
            'cccd.max' => 'CCCD phải có :max ký tự',
            'sdt.size' => 'Số điện thoại phải có :size ký tự',
            'sdt.unique' => 'Số điện thoại này đã có người sử dụng',
            'diachi.min' => 'Địa chỉ ít nhất :min ký tự',
            'diachi.max' => 'Địa chỉ nhiều nhất :max ký tự',
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
}
