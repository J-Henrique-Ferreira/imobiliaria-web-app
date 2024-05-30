<?php

namespace App\Http\Requests\Admin\District;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;


class DistrictStoreUpdateRequest extends FormRequest
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
        $districtId = $request->id;

        return [
            "city_id" => "required",
            "name" => [
                "required",
                "min:3",
                "unique:districts,name," . $districtId,
            ],
        ];
    }
    public function messages()
    {
        return [
            "city_id" => "A cidade é obrigatória",
            "name.required" => "O nome do bairro é obrigatório.",
            "name.min" => "O nome do bairro precisa ter pelo menos 3 caracteres",
            "name.unique" => "O nome precisa ser unico."
        ];
    }

    protected $redirectRoute = 'districts.index';
}
