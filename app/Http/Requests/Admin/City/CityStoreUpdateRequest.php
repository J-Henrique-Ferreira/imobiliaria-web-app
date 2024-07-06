<?php

namespace App\Http\Requests\Admin\City;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class CityStoreUpdateRequest extends FormRequest
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
            "name" => [
                "required",
                "min:3",
                "unique:cities,name," . $request->id,
            ],
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "O nome é obrigatório.",
            "name.min" => "O nome precisa ter pelo menos 3 caracteres.",
            "name.unique" => "O nome precisa ser unico."
        ];
    }

    protected $redirectRoute = 'cities.index';
}
