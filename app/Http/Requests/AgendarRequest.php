<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgendarRequest extends FormRequest
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
            'fecha_hora_atencion' => 'required',
        ];
    }

    public function messages()
    {
        return [
        
            'fecha_hora_atencion.required' => 'la fecha de la hora de atencion es obligatoria',
        ];
    }
}
