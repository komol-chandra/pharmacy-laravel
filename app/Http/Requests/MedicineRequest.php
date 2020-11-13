<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicineRequest extends FormRequest
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
            'med_name' => "required",
            'med_cat_id' => "required",
            'med_type_id' => "required",
            'med_gen_id' => "required",
            'med_manuf_id' => "required",
            'med_unit_id' => "required",
            'med_vat' => "required",
            'med_tax' => "required",

        ];
    }
    public function name()
    {
        return [
            'med_name' => "Medicine Name",
            'med_cat_id' => "Medicine Category",
            'med_type_id' => "Medicine Type",
            'med_gen_id' => "Medicine Generic",
            'med_manuf_id' => "Medicine Manufacture",
            'med_unit_id' => "Medicine Unit",
            'med_vat' => "Medicine Vat",
            'med_tax' => "Medicine Tax",

        ];
    }
}
