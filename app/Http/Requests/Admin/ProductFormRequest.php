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
            'title'   => "required|unique:products,title,$id",
            'meta_title'   => 'required',
            'meta_description'   => 'required',
            'description'   => 'required',
            'slug'        => "required|unique:products,slug,$id",
        ];
        return $rules;
    }
}
