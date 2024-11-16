<?php

namespace App\Http\Requests\Web;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'surname' => 'required|string|max:32|min:2',
            'name' => 'required|string|max:32|min:2',
            'patronymic' => 'nullable|string|max:32|min:2',
            'sex' => 'required|boolean',
            'birthday' => 'required|date',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|max:255|confirmed',
            'nickname' => 'required|string|min:2|max:255|unique:users',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg|max:4096',
            'phone' => 'nullable|string|min:10|max:16|unique:users',
        ];
    }

    //Кастомные сообшения
    public function messages(): array
    {
        return [
            'surname.required' => 'Фамилия обязательна для заполнения.',
            'surname.max' => 'Фамилия не должна превышать :max символов.',
            'surname.min' => 'Фамилия должна содержать минимум :min символа.',

            'name.required' => 'Имя обязательно для заполнения.',
            'name.max' => 'Имя не должно превышать :max символов.',
            'name.min' => 'Имя должно содержать минимум :min символа.',

            'patronymic.max' => 'Отчество не должно превышать :max символов.',
            'patronymic.min' => 'Отчество должно содержать минимум :min символа.',

            'sex.required' => 'Пол обязателен для заполнения.',
            'sex.boolean' => 'Пол должен быть булевым значением (true или false).',

            'birthday.required' => 'Дата рождения обязательна для заполнения.',
            'birthday.date' => 'Дата рождения должна быть в формате даты.',

            'email.required' => 'Email обязателен для заполнения.',
            'email.email' => 'Email должен быть действительным адресом электронной почты.',
            'email.max' => 'Email не должен превышать :max символов.',
            'email.unique' => 'Этот email уже занят.',

            'password.required' => 'Пароль обязателен для заполнения.',
            'password.min' => 'Пароль должен содержать минимум :min символов.',
            'password.max' => 'Пароль не должен превышать :max символов.',

            'nickname.required' => 'Никнейм обязателен для заполнения.',
            'nickname.min' => 'Никнейм должен содержать минимум :min символа.',
            'nickname.max' => 'Никнейм не должен превышать :max символов.',
            'nickname.unique' => 'Этот никнейм уже занят.',

            'avatar.image' => 'Аватар должен быть изображением.',
            'avatar.mimes' => 'Аватар должен быть в формате jpeg, png или jpg.',
            'avatar.max' => 'Размер аватара не должен превышать :max килобайт.',

            'phone.min' => 'Телефон должен содержать минимум :min символов.',
            'phone.max' => 'Телефон не должен превышать :max символов.',
            'phone.unique' => 'Этот телефон уже занят.',
        ];
    }
}
