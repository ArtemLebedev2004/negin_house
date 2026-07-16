<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AdminLoginRequest;

class AdminController extends Controller
{
    public function login(AdminLoginRequest $request)
    {
        $validated = $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);

        $user = User::create([
            'login' => $validated['login'],
            'password' => Hash::make($validated['password']),
        ]);

        // $credentials = $request->validate([
        //     'login' => ['required'],
        //     'password' => ['required'],
        // ]);

        // if (FacadesAuth::attempt($credentials)) {
        //     $request->session()->regenerate();

        //     return redirect()->intended('/admin-panel');
        // }

        // // $user = User::where('login', '=', $request->input('login'))->firstOrFail();

        // if(!Hash::check($request->input('password'), FacadesAuth::user()->password) && FacadesAuth::user()->login != $request->input('login')) {
        //     return back()->withErrors([
        //         'login' => 'Неправильный логин',
        //         'password' => 'Неправильный пароль'
        //     ]);
        // } else if (FacadesAuth::user()->login != $request->input('login')) {
        //     return back()->withErrors([
        //         'login' => 'Неправильный логин',
        //     ]);
        // } else {
        //     return back()->withErrors([
        //         'password' => 'Неправильный пароль',
        //     ]);
        // }

        // return back()->withErrors([
        //     'login' => 'Предоставленные учетные данные не соответствуют нашим записям.',
        // ])->onlyInput('login');
    }
}
