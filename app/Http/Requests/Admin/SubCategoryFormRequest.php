<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SubCategoryFormRequest extends FormRequest
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
        $id = $this->route('sub_category');
        $rules = [
            'category_id'   => 'required',
            'sub_category_name'        =>[
                'required',
                 Rule::unique('sub_categories')->where(function ($query) {
                     $query->where('sub_category_name', $this->sub_category_name)
                        ->where('category_id', $this->category_id);
                 })->ignore($id)
            ],  
        ];
        return $rules;
    }
}
