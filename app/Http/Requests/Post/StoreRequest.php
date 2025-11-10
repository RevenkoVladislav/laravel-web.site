<?php

namespace App\Http\Requests\Post;

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
            'title' => 'required|max:100',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id'
        ];
    }

    public function messages() : array
    {
        return [
            'title.required' => 'Заголовок обязателен',
            'title.max' => 'Заголовок слишком длинный ',
            'content.required' => 'Контент обязателен',
            'content.string' => 'Должен быть строчный тип данных',
            'category_id.required' => 'Выберите категорию',
            'category_id.exists' => 'Выберите доступную категорию'
        ];
    }
}
