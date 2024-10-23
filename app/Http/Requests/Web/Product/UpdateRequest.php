<?php

namespace App\Http\Requests\Web\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'image' => 'nullable',
            'description' => 'nullable',
            'price' => 'nullable',
            'sale' => 'nullable',
            'procate_id' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Hãy nhập tên sản phẩm',
            'image.nullable' => 'Hãy chọn ảnh sản phẩm',
            'description.nullable' => '',
            'price.nullable' => '0',
            'sale' => 'Khuyến mãi giảm giá',
            'procate_id' => 'Chọn danh mục sản phẩm',
        ];
    }
}
