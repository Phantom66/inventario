<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BienNacionalRequest extends FormRequest
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
            //

        'cod_bien' => 'required',
        'n_bien' => 'required', 
        'serial' => 'required',
        'fec_adquisicion' => 'required',
        'estatus_id'=>'required',
        'n_persona' => 'required',
        'apellido' =>'required',
        'fec_egreso' => 'required',  
        'n_unidad'=>'required'
        ];
    }
}
