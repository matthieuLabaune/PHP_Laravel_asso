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

   /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    /* public function messages()
    {
        return [
            'first_name.required' => 'Un prénom est obligatoire',
            'name.required' => 'Un nom est obligatoire',
            'birthdate.required' => 'Une date de naissance est obligatoire',
            'email.required' => 'Une adresse email est obligatoire',
            'phone.required' => 'Un numéro de téléphone est obligatoire',
            'city.required' => 'Une ville est obligatoire',
            'zip_code.required' => 'Un code postal est obligatoire',
            'address_1.required' => 'Une adresse est obligatoire',
            'role.required' => 'Un rôle est obligatoire',
            'gender.required' => 'Une identité est obligatoire',
        ];
    }*/
}
