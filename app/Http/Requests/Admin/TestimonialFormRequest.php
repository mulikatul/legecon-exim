<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialFormRequest extends FormRequest
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
        $id = $this->route('testimonial');
        $rules = [
            'client_name'   => "required",
            'company_name'  => 'required',
            'description'   => "required",
            // 'alt_text'    => 'required',
            // 'image'  => ($id ? 'nullable' : 'required') . '|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ];        
        return $rules;
    }
}
