<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'order_number' => 'bail|required|unique:orders,order_number',
            'product_id' => 'bail|required',
            'user_id' => 'bail|required',
            'quantity' => 'bail|required',
            'total_price' => 'bail|required',
            'status' => 'bail|required'
        ];
    }
}
