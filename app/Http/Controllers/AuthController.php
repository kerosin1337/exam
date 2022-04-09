<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function login()
    {
        return view('auth.login');
    }

    public function attempt(Request $request)
    {
        $request->validate(['login' => 'required|string|max:255', 'password' => 'required|string|max:255']);
        if (Auth::attempt($request->only('login', 'password'))) {
            $request->session()->regenerate();

            return redirect()->intended('welcome');
        }
        return back()->withInput($request->input())->withErrors(['errorLogin'=> 'Incorrect login or password']);
    }

    public function register()
    {
        return view('auth.register');
    }

    public function createUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|regex:/^[\w\- \p{Cyrillic}]*$/u',
            'surname' => 'required|string|regex:/^[\w\- \p{Cyrillic}]*$/u',
            'patronymic' => 'string|regex:/^[\w\- \p{Cyrillic}]*$/u',
            'login' => 'required|unique:users,login|regex:/^[a-zA-Z0-9-]*$/i',
            'email' => 'required|unique:users,email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
            'rules' => 'required'
        ]);

        User::create($request->only('name',
                'surname',
                'patronymic',
                'login',
                'email',
                'rules') + ['password' => Hash::make($request->password)]);

        return redirect(route('auth.login'));

//        dd($request->all());
    }
}
