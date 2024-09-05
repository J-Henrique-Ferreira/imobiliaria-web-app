<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class ProductStoreUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(Request $request): array
    {
        return [
            "category_id" => [
                "required",
                "exists:categories,id",
            ],
            "business_id" => [
                "required",
                "exists:business,id"
            ],
            "address_city_id" => [
                "required",
                "exists:cities,id"
            ],
            "address_district_id" => [
                "required",
                "exists:districts,id"
            ],
            "address_street" => [
                "required",
                "min:5"
            ],
            "address_number" => [
                "required",
            ],
            "value" => ["required"],
            "iptu" => ["required"],
            "description" => ["required", "min:3"],
            'images_list_url' => 'required|array',
            'images_list_url.*' => 'file|mimes:jpg,png,jpeg|max:5048',
            // "whoner_contact" => ["required"]
        ];
    }
}
