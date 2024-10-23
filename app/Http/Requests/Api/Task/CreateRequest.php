<?php

namespace App\Http\Requests\Api\Task;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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

    public function rules()
    {
        return [
            'name' =>  ['required', 'max:255'],
            'description' => 'required',
            'status'=> 'nullable',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Hãy nhập name.',
            'description.required' => 'Hãy nhập description.',
            'status.nullable' => 'error',
        ];
    }
}
