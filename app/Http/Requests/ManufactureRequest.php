<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManufactureRequest extends FormRequest
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
            'manufac_name'=> "required",
            'manufac_mobile'=> "required|unique:manufactures",
            'manufac_address'=> "required",
            'manufac_balance'=> "required",
            'manufac_email' => 'nullable|unique:manufactures',

        
        ];
        
    }
 public function name() 
 {
        return [
            'manufac_name' => 'Manufacture Name',
            'manufac_mobile' => 'Manufacture Mobile',
            'manufac_address' => 'Manufacture Address',
            'manufac_balance' => 'Manufacture Balance',
            'manufac_email' => 'Manufacture Email',

        ];
 }
}
