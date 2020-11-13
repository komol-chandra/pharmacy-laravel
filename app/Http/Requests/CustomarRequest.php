<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomarRequest extends FormRequest
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
            'customar_name'=>"required",
        ];
    }

    public function name()
    {
        return [
         'customar_name'=> "Customer Name",
        ];
    }
}
