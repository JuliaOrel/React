<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CityRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'city'=>'required',
            'description'=>'required',

        ];
    }

    public function messages(): array
    {
        return [
            'city.required' => 'Введіть назву міста',
            'description.required'=>'Введіть опис міста'
        ];
    }
}
