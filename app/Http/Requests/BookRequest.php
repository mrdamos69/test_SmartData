<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'NameBook' => 'required|max:50|min:2',
            'BookAuthor' => 'required|max:50|min:2'
        ];
    }

    public function messages()
    {
        return [
            'NameBook.required' => 'Поле имя обязательно для ввода!',
            'NameBook.max' => 'Максимальный ввод 50 символов',
            'NameBook.min' => 'Минимальный ввод 2 символа',
            'BookAuthor.required' => 'Поле имя обязательно для ввода!',
            'BookAuthor.max' => 'Максимальный ввод 50 символов',
            'BookAuthor.min' => 'Минимальный ввод 2 символа'
        ];
    }
}
