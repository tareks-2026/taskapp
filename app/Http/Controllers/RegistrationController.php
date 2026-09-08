<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'      => ['required', 'string', 'max:50'],
            'email'     => ['required', 'email', 'max:100', 'unique:users'],
            'password'  => ['required', 'string', 'min:8', 'confirmed'] //confirmed sucht automatisch nach einem feld mit dem namen "password_confirmation"
        ]);

        unset($validated['password_confirmation']); // Unnötig?
        $user = User::create($validated);
        auth()->login($user); //falscher alarm durch vs code, alternativ über facades

        $request->session()->regenerate(); // Sicherheitsmaßnahme

        return redirect()->route('tasks.index')->with('success', 'Willkommen zur TaskApp, ' . $user->name . '!');
    }
}
