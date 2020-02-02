<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            "fullname" => "required|string",
            "mobile" => "nullable|numeric",
            "country" => "nullable|string",
            "city" => "nullable|string",
            "address" => "nullable|string",
            "post_code" => "nullable|string",
        ];
    }
}
