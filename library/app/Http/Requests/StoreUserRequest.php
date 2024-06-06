<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            "firstname"=>"required",
            "lastname"=>"required",
            "national_code"=>"required|integer",
            "age"=>"required|integer",
            "username"=>"required|string|min:4|max:12",
            "password"=>"required|string|min:8|max:12",
        ];
    }
}
