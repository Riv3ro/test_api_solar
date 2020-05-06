<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'author' => 'required|string|min:10|max:50',
            'text' => 'required|string|min:5|max:400',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'author.required' => "Поле автор обязательно для заполнения.",
            'author.string' => "Поле автор должно быть строкой.",
            'author.min' => "Количество символов в поле автор должно быть не менее :min.",
            'author.max' => "Количество символов в поле автор не может превышать :max.",
            'text.required' => "Поле комментарий обязательно для заполнения.",
            'text.string' => "Поле комментарий должно быть строкой.",
            'text.min' => "Количество символов в поле комментарий должно быть не менее :min.",
            'text.max' => "Количество символов в поле комментарий не может превышать :max.",

        ];
    }
}
