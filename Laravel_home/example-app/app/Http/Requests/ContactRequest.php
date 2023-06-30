<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'email'=>'required|email',
            'name'=>'required',
           'subject'=> 'required|min:1|max:50',
            'message' => 'required|min:3|max:500'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Введіть своє ім\'я',
            'email.required'=>'Введіть свою електронну адресу',
            'subject.required'=>'Введіть тему повідомлення',
            'message.required'=> 'Введіть повідомлення',
            'email.email'=>'Електронна адреса не може бути без символу @',
            'subject.min'=>'Тема повідомлення не може містити менше трьох символів',
            'message.min'=>'Текст повідомлення не може містити менше трьох символів',
            'subject.max'=>'Тема повідомлення не може містити більше 50 символів',
            'message.max'=>'Текст повідомлення не може містити більше 500 символів',



        ];
    }
}
