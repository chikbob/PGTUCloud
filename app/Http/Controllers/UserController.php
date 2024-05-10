<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class UserController extends Controller
{
    public function register(Request $request)
    {
        // Валидация данных формы
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        // Создание нового пользователя
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        return redirect('http://127.0.0.1:8000/login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Аутентификация успешна
            return redirect('http://127.0.0.1:8000');
        } else {
            // Неверные учетные данные
            return redirect('http://127.0.0.1:8000/login');
        }
    }

    public function user(Request $request)
    {
        $user = Auth::user(); // Получаем текущего аутентифицированного пользователя

        return Inertia::render('index', [
            'user' => $user
        ]);
    }
}
