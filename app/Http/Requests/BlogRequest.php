<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            "title_fr" => "required|string",
            "title_en" => "required|string",
            "content_fr" => "required",
            "content_en" => "required",
            "image" => "required|mimes:jpg,png,jpeg|dimensions:min-width=400,min-height=250|max:1024",
            "blog_category_id" => "required|exists:blog_categories,id",
            "type" => "required|in:1,2",
        ];
    }
}
