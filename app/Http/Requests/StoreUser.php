<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
            'name' => 'required|max:255',
            'first_name' => 'required|max:255',
            'birthdate' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|max:20',
            'city' => 'required|max:100',
            'zip_code' => 'required|max:25',
            'address_1' => 'required|max:80',
            'address_2' => 'required|max:80',
            'role' => 'required',
            'gender' => 'required'
        ];
    }
}
