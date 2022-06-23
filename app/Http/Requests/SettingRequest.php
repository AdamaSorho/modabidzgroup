<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            "facebook" => "nullable|url",
            "twitter" => "nullable|url",
            "linkedin" => "nullable|url",
            "youtube" => "nullable|url",
            "location" => "required|string",
            "email" => "required|email",
            "phone" => "required",
            "slogan_fr" => "required|string",
            "slogan_en" => "required|string",
            "sub_slogan_fr" => "nullable|string",
            "sub_slogan_en" => "nullable|string",
            "about_us_fr" => "required|string",
            "about_us_en" => "required|string",
            "image" => "nullable|mimes:jpg,png,jpeg|dimensions:width=500,height=600|max:1024",
            "choose_us_fr" => "required|string",
            "choose_us_en" => "required|string",
            "header_color" => "nullable|string|max:155",
            "footer_color" => "nullable|string|max:155",
            "logo" => "nullable|mimes:jpg,png,jpeg|max:1024",
        ];
    }
}
