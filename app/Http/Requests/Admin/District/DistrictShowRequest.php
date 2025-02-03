<?php

namespace App\Http\Requests\Admin\District;

use Illuminate\Foundation\Http\FormRequest;

class DistrictShowRequest extends FormRequest
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
            'id' => 'required_without:name|nullable|string',
            'name' => 'required_without:id|nullable|string',
        ];
    }

    /**
     * Get custom error messages for validator errors.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'id.required_without' => 'O campo ID é obrigatório quando o nome não é fornecido.',
            'name.required_without' => 'O campo Nome é obrigatório quando o ID não é fornecido.',
        ];
    }
}
