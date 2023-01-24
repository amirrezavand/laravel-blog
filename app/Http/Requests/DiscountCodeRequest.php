<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiscountCodeRequest extends FormRequest
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
            'code' => 'required' ,
            'lu_discount_type' => 'required',
            'amount' => 'required' ,
            'is_active' => 'nullable' ,

        ];
    }
}
