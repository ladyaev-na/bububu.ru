<?php

namespace App\Http\Controllers\Api;

use App\Exceptions\ApiException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\RegisterRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function register(RegisterRequest $request){
        // Регистрация

            // Извлечение записи роли 'пользователь'
            $role_user = Role::where('code', 'user')->first();

            // Путь к файлу аватар
            $path = null;

            // Сохранение аватара пользователя
            if ($request->hasFile('avatar')) {
                $path = $request->file('avatar')->store('avatars', 'public');
            }

            // Создание пользователя
            $user = User::create([
                ...$request->validated(), 'avatar' => $path, 'role_id' => $role_user->id
            ]);

            // Генерирация токена
            $user->api_token = Hash::make(Str::random(60));
            $user->save();

            // Ответ
            return response()->json([
                'user' => $user,
                'token' => $user->api_token,
            ])->setStatusCode(201);


    }
    public function login(Request $request){
        // Если прользователя нет в бд
        if (!Auth::attempt($request->only('email', 'password'))){
            throw new ApiException('Unauthorized',401);
        }

        // Если пользователь есть в бд
        $user = Auth::user();
        // Генерируем токен
        $user->api_token = Hash::make(Str::random(60));
        // Сохраняем
        $user->save();
        // Ответ

        return response()->json([
            'user' => $user,
            'token' => $user->api_token,
        ])->setStatusCode(200);

    }
    public function logout(Request $request){
        $user = Auth::user();
        $user->api_token = null;
        $user->save();
        return response()->json([])->setStatusCode(200);
    }
}
