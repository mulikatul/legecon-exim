<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsFormRequest extends FormRequest
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
        $rules = [
            'name'            => 'required',
            'email'                 => 'required|email',
            'company'           =>'required',
            'location'               => 'required',
            'phone_no'              => 'required',
            'message'               => 'required',
            'g-recaptcha-response'  => 'required|captcha',
        ];

        return $rules;
    }
}
