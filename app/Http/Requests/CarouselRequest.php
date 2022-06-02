<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarouselRequest extends FormRequest
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
            "title_fr" => "nullable|string",
            "title_en" => "nullable|string",
            "subtitle_fr" => "nullable|string",
            "subtitle_en" => "nullable|string",
//            "image" => "nullable|mimes:jpg,png,jpeg|dimensions:width=1366,height=800|max:1024",
            "image" => "nullable|mimes:jpg,png,jpeg|max:1024",
            "is_active" => "boolean",
            "type" => "required|in:1,2",
        ];
    }
}
