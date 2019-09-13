<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => 'required|max:20|min:4',
            'thumbnail'=>'filled',
            'description'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên danh mục',
            'name.min' => 'Tên quá ngắn, vui lòng nhập ít nhất 4 ký tự.',
            'name.max' => 'Tên quá dài, vui lòng nhập nhiều nhất 20 ký tự.',
            'thumbnail.filled' => 'Vui lòng chọn ảnh',
            'description.required'=>'Vui lòng nhập mô tả',
        ];
    }
}
