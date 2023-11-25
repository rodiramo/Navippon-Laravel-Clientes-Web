<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function formLogin()
    {
        return view('auth.form-login');
    }

    public function processLogin(Request $request)
    {

        $credentials = $request->only(['email', 'password']);


        if (!auth()->attempt($credentials)) {
            return back()
                ->with('message.error', 'The credentials provided dont match.');
        } else {
            if (auth()->user()->role_id == 1) {
                return redirect()->route('admin.dashboard');
            }
        }

        $request->session()->regenerate();

        return redirect()
            ->route('profile')
            ->with('message.success', 'Welcome Back!');
    }

    public function formSignup()
    {
        return view('auth.form-signup');
    }


    public function processSignup(Request $request)
    {
        $credentials = $request->only(['email', 'name', 'password']);

        try {
            $credentials['password'] = Hash::make($credentials['password']);
            $user = User::create($credentials);



            auth()->login($user);

            $request->session()->regenerate();

            return redirect()
                ->route('profile')
                ->with('message.success', 'Welcome!');
        } catch (\Exception $e) {
            return back()
                ->with('message.error', 'Unable to register. Please try again.');
        }
    }


    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('login')
            ->with('message.success', 'Successfully logged out!');
    }
}
