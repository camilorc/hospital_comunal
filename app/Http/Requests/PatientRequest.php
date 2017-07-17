<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
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
            'rut' => 'required|unique:Patients',
            'name' => 'required',
            'fecha_nacimiento' => 'required|date',
            'direccion' => 'required',
        ];
    }

    public function messages()
    {
        return [
        
            'rut.required' => 'Rut es obligatorio',
            'name.required' => 'El campo nombre es obligatorio',
            'rut.unique' => 'Rut ya está registrado',
            'fecha_nacimiento.required' => 'El campo fecha de nacimiento es obligatorio',
            'direccion.required' => 'El campo direccion es obligatorio',
        ];
    }
}
