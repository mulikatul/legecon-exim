<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
        $id = $this->route('product');
        $rules = [
            'category_id'   => 'required',
            'sub_category_id'   => 'required',
            'buy_link'   => 'required',
            'title'   => $id ? 'required|unique:products,title,' . $id . ',id': 'required|unique:products,title',
            'meta_title'   => 'required',
            'price'   => 'required',
            'meta_description'   => 'required',
            'description'   => 'required',
            'slug'        => $id ? 'required|unique:products,slug,' . $id . ',id': 'required|unique:products,slug',
        ];
        return $rules;
    }
}
