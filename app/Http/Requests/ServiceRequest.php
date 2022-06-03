<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            "wording_fr" => "required|string|max:50",
            "wording_en" => "required|string|max:50",
            "image" => "nullable|mimes:jpg,png,jpeg|dimensions:min-width=100,min-height=100|max:1024",
        ];
    }
}
