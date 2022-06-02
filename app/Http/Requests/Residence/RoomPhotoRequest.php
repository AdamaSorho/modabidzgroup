<?php

namespace App\Http\Requests\Residence;

use Illuminate\Foundation\Http\FormRequest;

class RoomPhotoRequest extends FormRequest
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
            "image" => "required|mimes:jpg,png,jpeg|dimensions:min-width=400,min-height=250|max:1024",
            "room_id" => "required|exists:rooms,id",
        ];
    }
}
