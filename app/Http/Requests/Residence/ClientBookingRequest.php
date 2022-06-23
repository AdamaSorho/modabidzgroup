<?php

namespace App\Http\Requests\Residence;

use Illuminate\Foundation\Http\FormRequest;

class ClientBookingRequest extends FormRequest
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
            "name" => "nullable|string|max:100",
            "email" => "required|email:rfc,dns|max:100",
            "phone" => "required|string|max:50",
            "check_in" => "required|date|after_or_equal:today",
            "check_out" => "required|date|after:check_in",
            "guest" => "nullable",
            "room_id" => "required|exists:rooms,id",
            "status" => "nullable|in:1,2"
        ];
    }
}
