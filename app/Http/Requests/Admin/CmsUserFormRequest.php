<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CmsUserFormRequest extends FormRequest
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
        $id = $this->route('cms_user');
        $rules = [
            'name'     => 'required',
            'email'    => "required|unique:admins,email,$id",
            'role'     => 'required',
            'password' => ($id ? 'nullable' : 'required') . '|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*#?&]).+$/|confirmed',
            'password_confirmation' => ($id ? 'nullable' : 'required') ,
        ];
        return $rules;
    }
}
