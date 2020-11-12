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
            'first_name' => 'required|max:255',
            'name' => 'required|max:255',
            'birthdate' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|max:255',
            'city' => 'required|max:255',
            'zip_code' => 'required|max:255',
            'address_1' => 'required|max:255',
            'address_2' => 'required|max:255'
        ];
    }
}
