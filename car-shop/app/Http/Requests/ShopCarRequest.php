<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShopCarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "title"=>"required",
            "brand_id"=>"required|integer",
            "car_type"=>"required",
            "cylinder"=>"required",
            "engine_id"=>"required|integer",
            "price"=>"required|max_digits:6|integer"
        ];
    }
    public function messages()
    {
        return [
            "title.required"=>"title is not valid",
            "title.min"=>"title is too short"
        ];
    }
}
