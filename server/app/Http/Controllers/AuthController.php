<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Auth\Access\Response;
use App\Models\User;

class AuthController extends Controller
{

    public function register(Request $request) {

        $validator = Validator::make($request->all(),
            [
            'name' => 'required|max:255',
            'login' => 'required|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            ],
            [
                'name.required' => 'Поле имя обязательно для заполнения',
                'password.confirmed' => 'Пароли не совпадают',
                'login.unique' => 'Данный логин уже существует',
                'login.required' => 'Поле логин обязательно для заполнения',
                'password.min' => 'Поле пароль должно содержать :min символов'
            ]
        );

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        } else {
            User::create([
                'name' => $request->name,
                'login' => $request->login,
                'password' => bcrypt($request->password),
            ]);
        }

    }
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'login' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails() ) {
            return redirect()->back()->withErrors($validator);
        }

        if (Auth::attempt(['login' => $request->login, 'password' => $request->password])) {
            return redirect('admin/home');
        } else {
            return redirect()->back()->withErrors([
                'login' => true,
                'password' => true
            ]);
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
