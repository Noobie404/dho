<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddOfferRequest extends FormRequest
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
            "product_cat" => "required|string",
            "offer_cat" => "required|string",
            "title" => "required|string",
            "provider" => "required|string",
            "promo_code" => "nullable|string",
            "offer_start" => "required|date",
            "offer_end" => "required|date",
            "offer_note" => "nullable|string",
            "price" => "required|string",
            "currency" => "required|string",
            "product_link" => "required|string",
            "description" => "nullable|string",
        ];
    }
}
