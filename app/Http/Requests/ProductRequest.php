<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
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
     */
    public function rules(): array
    {

        return [
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'rental_period' => 'nullable|integer|min:1',
            'status' => 'nullable|integer',
            'brand_id' => 'nullable|integer|exists:brands,id',
            'category_id' => 'nullable|integer|exists:categories,id',
            'color_id' => 'nullable|integer|exists:colors,id',
            'size' => 'nullable|string|max:255',
            'material' => 'nullable|string|max:255',
            'condition' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:1000',
            'slug' => [
                'nullable',
                'string',
                Rule::unique('products', 'slug')->ignore($this->route('product'))
            ],
        ];

    }

    /**
     * Custom error messages for validation rules.
     */
    public function messages()
    {
        return [
            'name.required' => 'The product name is required.',
            'quantity.required' => 'The quantity is required.',
            'price.required' => 'The price is required.',
            'price.numeric' => 'The price must be a valid number.',
            'slug.unique' => 'The slug has already been taken.',
        ];
    }
}
