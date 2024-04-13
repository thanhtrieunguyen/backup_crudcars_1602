<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class HangXeUpdateRequest extends FormRequest
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
        $hangxeId = $this->route('hangxe');
        return [
            'tenhangxe' => [
                'required',
                'min:3',
                'max:255',
                Rule::unique('hangxe')->ignore($hangxeId, 'idhangxe'),
            ]
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
