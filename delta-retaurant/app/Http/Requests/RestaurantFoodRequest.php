<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestaurantFoodRequest extends FormRequest
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
            "title"=>"required|min:3|string",
            "food_type"=>"required",
            "category_id"=>"required|integer",
            "price"=>"required|integer|max digits:7",
            "entity"=>"required|in:yes,no",
        ];
    }

    public function messages()
    {
        return [
            "title.required"=>"title is not valid",
            "title.min"=>"title is to short"
        ];
    }
}
