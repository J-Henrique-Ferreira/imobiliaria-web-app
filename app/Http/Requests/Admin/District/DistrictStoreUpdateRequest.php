<?php

namespace App\Http\Requests\Admin\District;

use Illuminate\Foundation\Http\FormRequest;

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
    public function rules(): array
    {
        return [
            "city_id" => "required",
            "name" => "required|min:3"
        ];
    }
    public function messages()
    {
        return [
            "city_id" => "A cidade é obrigatória",
            "name.*" => "O nome do bairro é obrigatório e precisa ter pelo menos 3 caracteres",
        ];
    }

    protected $redirectRoute = 'districts.index';
}
