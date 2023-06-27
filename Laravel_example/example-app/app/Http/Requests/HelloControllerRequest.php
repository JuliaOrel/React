<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HelloControllerRequest extends FormRequest
{
    public function rules(): array{
        return [
           'myVar' => 'required'

        ];

    }
}
