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
            //
            'name' => [
                'required',
                'string',
                'max:10',
                'unique:categories',
            ],
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'カテゴリー名は必須です。',
            'name.string' => 'カテゴリー名は文字列で入力してください。',
            'name.max' => 'カテゴリー名は10文字以内で入力してください。',
            'name.unique' => 'そのカテゴリーは既に存在しています。',
        ];
    }
}
