<?php

namespace App\Http\Requests\Residence;

use Illuminate\Foundation\Http\FormRequest;

class RoomRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
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
            "name_fr" => "required|string",
            "name_en" => "required|string",
            "description_fr" => "required",
            "description_en" => "required",
            "state" => "required|boolean",
            "amount" => "required|integer",
        ];
    }
}
