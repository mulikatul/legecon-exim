<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ClientLogoFormRequest extends FormRequest
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
        $id = $this->route('client_logo');
        // dd($id);
        $rules = [
            'client_name'   => "required|unique:client_logos,client_name,$id",
            'alt_text'    => 'required',
            'logo_image'  => ($id ? 'nullable' : 'required') . '|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ];        
        return $rules;
    }
}
