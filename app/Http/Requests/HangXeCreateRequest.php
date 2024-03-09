<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HangXeCreateRequest extends FormRequest
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
            'tenhangxe' => 'unique:hangxe|required|min:3|max:255'
        ];
    }

    public function messages()
    {
        return [
            'tenhangxe.min' => 'Tên hãng xe ít nhất :min ký tự',
            'tenhangxe.max' => 'Tên hãng xe nhiều nhất :max ký tự',
            'tenhangxe.required' => 'Chưa nhập tên hãng xe',
            'tenhangxe.unique' => 'Hãng xe đã tồn tại',
        ];
    }
}
