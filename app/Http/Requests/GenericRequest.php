<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GenericRequest extends FormRequest
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
            'generic_name'=>"required",
        ];
    }
    public function name(){
        return[
            'generic_name'=>'Generic Name',

        ];
    }
}
