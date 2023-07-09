<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register', [
            'title' => 'SIPKTA | Register'
        ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'nik' => ['required', 'string', 'min:16', 'unique:' . User::class],
            'nohp' => ['required', 'string'],
            'alamat' => ['required', 'string',],
            'password' => ['required', 'confirmed', 'min:8'],

        ]);

        $validatedData['password'] = Hash::make($request->password);

        User::create($validatedData);

        // event(new Registered($user));

        // Auth::login($user);

        return redirect('/login')->with('message', 'Terima kasih sudah mendaftarkan diri anda, silahkan login untuk melapor');
    }
}
