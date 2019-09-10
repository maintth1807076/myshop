<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Product_validate extends FormRequest
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
            'detail'=>'required',
            'price'=>'required|integer',
            'description'=>'required',
            'category_id'=>'required',

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên sản phẩm',
            'name.min' => 'Tên quá ngắn, vui lòng nhập ít nhất 4 ký tự.',
            'name.max' => 'Tên quá dài, vui lòng nhập nhiều nhất 20 ký tự.',
            'detail.required'=>'hãy nhập detail',
            'price.required'=>'vui lòng nhập giá',
            'price.integer'=>'hãy nhập số nguyên vì đây là giá tiền',
            'description.required'=>'vui lòng nhập description',
            'category_id.required'=>'hãy nhập id_categories',

        ];
    }
}