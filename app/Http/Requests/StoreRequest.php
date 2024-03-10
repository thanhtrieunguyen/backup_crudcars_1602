<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'gia' => 'required',
            'tenxe' => 'min:3|max:255',
            'bienso' => [
                'required',
                'min:8',
                'max:8',
                'regex:/^\d{2}[A-Za-z]\d{5}$/',
                function ($attribute, $value, $fail) {
                    if (!preg_match('/^\d{2}[A-Za-z]\d{5}$/', $value)) {
                        $fail('Bạn nhập sai định dạng');
                    }
                }
            ],
            'hinhxe' => 'required',
            'hinhxe.*' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048',
            'nhienlieutieuhao_km' => 'max:5'
        ];
    }

    public function messages()
    {
        return [

            'iddongxe.required' => 'Chưa chọn dòng xe',
            'idhangxe.required' => 'Chưa chọn hãng xe',
            'gia.required' => 'Chưa nhập giá thuê xe',
            'tenxe.min' => 'Tên xe ít nhất :min ký tự',
            'tenxe.max' => 'Tên xe nhiều nhất :max ký tự',
            'bienso.unique' => 'Biển số xe đã tồn tại',
            'bienso.min' => 'Biển số xe ít nhất :min ký tự',
            'bienso.max' => 'Biển số xe nhiều nhất :max ký tự',
            'bienso.regex' => 'Biển số xe không đúng định dạng (Vd:20H12345)',
            'hinhxe.required' => 'Chưa chọn hình',
            'hinhxe.*.required' => 'Chưa chọn hình',
            'hinhxe.*.image' => 'File tải lên phải là hình ảnh',
            'hinhxe.*.mimes' => 'Hình ảnh phải có định dạng jpeg, png, jpg hoặc gif',
            'hinhxe.*.max' => 'Kích thước hình ảnh tối đa là 2048 KB',
            'nhienlieutieuhao_km.max' => 'Tối đa 5 ký tự'
        ];
    }
}
