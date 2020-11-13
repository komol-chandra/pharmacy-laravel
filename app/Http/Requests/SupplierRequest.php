<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupplierRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "supplier_name"=>"required",
            "supplier_address"=>"required",
            "supplier_mobile"=>"required|unique:suppliers",
            "supplier_email"=>"nullable|unique:suppliers",
            "supplier_current_balance"=>"required",
        ];
    }
    public function name(){
        return[
            "supplier_name"=>"Supplier Name",
            "supplier_address"=>"Supplier Address",
            "supplier_mobile"=>"Supplier Mobile",
            "supplier_email"=>"Supplier Email",
            "supplier_current_balance"=>"Current Balance",
        ];
    }
}
