<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VideoRequest extends FormRequest
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
            "title_fr" => "nullable|string|max:155",
            "title_en" => "nullable|string|max:155",
            "frame" => "required",
            "video_category_id" => "required|exists:video_categories,id",
        ];
    }
}
