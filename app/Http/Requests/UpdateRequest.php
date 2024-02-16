<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'iddongxe' => 'required',
            'idhangxe' => 'required',
            'tenxe' => 'min:3|max:255',
            'hinhxe' => 'sometimes',
            'hinhxe.*' => 'file|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    public function messages()
    {
        return
            [
                'iddongxe.required' => 'Chưa chọn dòng xe',
                'idhangxe.required' => 'Chưa chọn hãng xe',
                'gia.required' => 'Chưa nhập giá thuê xe',
                'tenxe.min' => 'Tên xe ít nhất :min ký tự',
                'tenxe.max' => 'Tên xe nhiều nhất :max ký tự',
                'hinhxe.*.image' => 'File tải lên phải là hình ảnh',
                'hinhxe.*.mimes' => 'Hình ảnh phải có định dạng jpeg, png, jpg hoặc gif',
                'hinhxe.*.max' => 'Kích thước hình ảnh tối đa là 2048 KB',
            ];
    }
}
