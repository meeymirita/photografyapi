<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class UserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|min:2|max:255',
            'lastname' => 'required|string|min:2|max:255',
            'login' => 'required|string|min:3|max:255|unique:users,login',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string|min:10|max:15',
            'password' => 'required|string|min:5|max:255|confirmed',
            'city' => 'required|string|min:2|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Поле "Имя" обязательно для заполнения',
            'name.string' => 'Поле "Имя" должно быть строкой',
            'name.min' => 'Поле "Имя" должно содержать минимум 2 символа',
            'name.max' => 'Поле "Имя" должно содержать не более 255 символов',

            'lastname.required' => 'Поле "Фамилия" обязательно для заполнения',
            'lastname.string' => 'Поле "Фамилия" должно быть строкой',
            'lastname.min' => 'Поле "Фамилия" должно содержать минимум 2 символа',
            'lastname.max' => 'Поле "Фамилия" должно содержать не более 255 символов',

            'login.required' => 'Поле "Логин" обязательно для заполнения',
            'login.string' => 'Поле "Логин" должно быть строкой',
            'login.min' => 'Поле "Логин" должно содержать минимум 3 символа',
            'login.max' => 'Поле "Логин" должно содержать не более 255 символов',
            'login.unique' => 'Такой "Логин" уже существует',

            'email.required' => 'Поле "Email" обязательно для заполнения',
            'email.email' => 'Введите корректный email адрес',
            'email.unique' => 'Такой email уже существует',

            'phone.required' => 'Поле "Телефон" обязательно для заполнения',
            'phone.string' => 'Поле "Телефон" должно быть строкой',
            'phone.min' => 'Номер телефона должен содержать минимум 10 символов',
            'phone.max' => 'Номер телефона должен содержать не более 15 символов',

            'password.required' => 'Поле "Пароль" обязательно для заполнения',
            'password.string' => 'Поле "Пароль" должно быть строкой',
            'password.min' => 'Пароль должен содержать минимум 5 символов',
            'password.max' => 'Пароль должен содержать не более 255 символов',
            'password.confirmed' => 'Пароли не совпадают',

            'city.required' => 'Поле "Город" обязательно для заполнения',
            'city.string' => 'Поле "Город" должно быть строкой',
            'city.min' => 'Название города должно содержать минимум 2 символа',
            'city.max' => 'Название города должно содержать не более 255 символов',
        ];
    }
}
