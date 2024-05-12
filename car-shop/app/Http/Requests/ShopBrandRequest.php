<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShopBrandRequest extends FormRequest
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
            "title"=>"required|min:3"

        ];
    }
    public function messages()
    {
        return [
            "title.required"=>"title not valid",
            "title.min"=>"title is too short"
        ];
    }
}
