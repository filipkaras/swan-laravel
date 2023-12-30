<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create()
    {
        return view('login.create');
    }

    public function store(LoginRequest $request)
    {
        auth()->logout();

        $attributes = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (!auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'password' => 'Provided credentials are not valid.'
            ]);
        }

        session()->regenerate(); // protection against session fixation

        return redirect('/')->with('success', 'Welcome back!');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
