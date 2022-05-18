<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QualityRequest extends FormRequest
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
            "wording_fr" => "required|string",
            "wording_en" => "required|string",
        ];
    }
}
