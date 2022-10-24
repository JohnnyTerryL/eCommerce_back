<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CardRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'user_id' => 'bail|required',
            'card_name' => 'bail|required',
            'card_number' => 'bail|required|min:16|max:16',
            'card_expiration_date' => 'bail|required',
            'card_cvc' => 'bail|required|min:3|max:3'
        ];
    }
}
