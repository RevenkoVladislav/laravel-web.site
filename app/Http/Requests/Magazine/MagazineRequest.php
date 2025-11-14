<?php

namespace App\Http\Requests\Magazine;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MagazineRequest extends FormRequest
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
            'shop_id' => 'required|exists:shops,id',
            'product_id' => [
                'required',
                'exists:products,id',
                Rule::unique('product_shop')
                    ->where(fn ($query) => $query->where('shop_id', $this->shop_id))
                //проверяем что нет строк в таблице product_shop которые повторяются с shop_id
            ],
            'price' => 'required|integer'
        ];
    }
}
