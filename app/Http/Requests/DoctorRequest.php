<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorRequest extends FormRequest
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
            'rut' => 'required|unique:Doctors',
            'name' => 'required',
            'fecha_contratacion' => 'required|date',
            'especialidad' => 'required',
            'valor_consulta' => 'required|integer',
        ];
    }

     public function messages()
    {
        return [
        
            'rut.required' => 'Rut es obligatorio',
            'name.required' => 'el campo nombre es obligatorio',
            'rut.unique' => 'Rut ya está registrado',
            'fecha_contratacion.required' => 'El campo fecha de contratacion',
            'especialidad.required' => 'el campo especialidad es obligatorio',
            'valor_consulta.required' => 'el campo valor consulta es obligatorio',
            'valor_consulta.integer' => 'el campo valor consulta debe ser un numero entero',
        ];
    }
}
