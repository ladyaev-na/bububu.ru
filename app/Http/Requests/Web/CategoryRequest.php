<?php

namespace App\Http\Requests\Web;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'name' => 'required|min:1|max:64',
        ];
    }
    public function messages(): array
    {
        return [
            'name.min' => 'Название категории не должно быть пустым',
            'name.max' => 'Название категории не превышать 64 символа',
        ];
    }
}
