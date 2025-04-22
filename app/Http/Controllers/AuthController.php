<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request) {
         $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:12',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'remember_token' => $request->_token,
        ]);

        Auth::login($user);
        return redirect('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
    
            // Get the authenticated user's role
            $user = Auth::user();
    
            // Redirect based on role
            switch ($user->role) {
                case 'Admin':
                    return redirect("/");// or your route name
                case 'Officer':
                    return redirect("officer");
                case 'Alumnus':
                    return redirect("alumnus");
                default:
                    Auth::logout();
                    return redirect('/login')->withErrors([
                        'email' => 'Unauthorized role.',
                    ]);
            }
        }
    
        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ])->onlyInput('email');
    }

    public function logout(Request $request){

            return redirect('/login'); // or wherever you want
    }
    
}
