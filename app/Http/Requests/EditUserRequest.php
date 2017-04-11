<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fullname' => 'required',
            'email' => 'required|email',
            'avatar' => 'image|mimes:jpeg,jpg,png,gif | max:1024',
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => 'Enter User fullname',
            'email.required' => 'Enter User Email address',
            'email.email' => 'Enter User email format',
        ];
    }
}
