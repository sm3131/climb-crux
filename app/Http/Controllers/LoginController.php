<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class LoginController extends Controller
{
    public function login()
    {
        return view('blog.login', ['title' => 'Blog Login']);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, false)) {
            $request->session()->regenerate();
            return redirect()->intended();
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function showRegister()
    {
        if (config('app.show_register') === true) {
            return view('blog.register', ['title' => 'Registration']);
        } else {
            return redirect('/blog');
        }
    }

    public function register(Request $request)
    {
        $newUser = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'user_type' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', Password::min(8)->mixedCase()->numbers()->symbols()],
        ]);

        $user = User::create($newUser);

        Auth::login($user);

        return redirect()->intended();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/logout-success');
    }

    public function logoutSuccess()
    {
        return view('blog.logout', ['message' => 'You have successfully logged out! Have a great day!', 'title' => 'LogOut']);
    }
}
