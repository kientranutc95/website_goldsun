<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'image' => 'required',
            'name_en' => 'required',
            'name_vi' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'image.required' => "Bạn chưa chọn ảnh !",
            'name_en.required' => "Bạn chưa nhập tên danh mục (Tiếng việt) !",
            'name_vi.required' => "Bạn chưa nhập tên danh mục (Tiếng anh) !",
        ];
    }
}
