<?php

namespace App\Http\Requests\Api;

use App\Exceptions\ApiException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class ApiRequest extends FormRequest
{
   // Вызов при провале авторизации
    public function failedAuthorization()
    {
        throw new ApiException('Ошибка авторизации пользователя', 403);
    }

    // вызов при провале валидации
    protected function failedValidation(Validator $validator)
    {
        throw new ApiException('Ошибка валидации данных', 422, $validator->errors());
    }
}
