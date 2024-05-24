<?php

namespace App\Http\Requests\Admin\City;

use Illuminate\Foundation\Http\FormRequest;

class CityFormRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            "name" => "required|min:3",
        ];
    }

    public function messages()
    {
        return [
            "name.*" => "O nome é obrigatório e precisa ter pelo menos 3 caracteres."
        ];
    }

    protected $redirectRoute = 'cities.index';
}
