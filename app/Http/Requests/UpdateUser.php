<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUser extends FormRequest
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
            'first_name' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'birthdate' => 'required|date|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:255',
            'city' => 'required|string|max:255',
            'zip_code' => 'required|numeric|max:99999',
            'address_1' => 'required|string|max:255',
            'address_2' => 'nullable|string|max:255',
            'role' => 'required',
            'gender' => 'required'
        ];
    }
}
