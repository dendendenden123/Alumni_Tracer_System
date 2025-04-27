<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailConfirmation;
use App\Models\User;

class AuthController extends Controller
{
    // Register a new user
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:12',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);
        return redirect('login');
    }

    // Login an existing user
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            return $this->redirectBasedOnRole(Auth::user());
        }

        return back()->withErrors(['email' => 'Invalid credentials.'])->onlyInput('email');
    }

    // Logout the user
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    // Check if an email exists in the database
    public function checkEmail(Request $request)
    {
        $exists = User::where('email', $request->query('email'))->exists();
        return response()->json(['exists' => $exists]);
    }

    // Check if the password meets strength criteria
    public function checkPasswordStrength(Request $request)
    {
        $isStrong = $this->isPasswordStrong($request->query('password'));
        return response()->json(['strong' => $isStrong]);
    }

    // Send email confirmation code
    public function sendMailConfirmation(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $code = rand(100000, 999999);
        session(['email_verification_code_' . $request->email => $code]);

        Mail::to($request->email)->send(new EmailConfirmation($code));
        return response()->json(['success' => true]);
    }

    // Verify the email confirmation code
    public function verifyMailConfirmation(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'code' => 'required',
        ]);

        $sessionKey = 'email_verification_code_' . $request->email;
        $storedCode = session($sessionKey);

        if ($storedCode && $storedCode == $request->code) {
            session()->forget($sessionKey);
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false, 'message' => 'Invalid or expired code.']);
    }

    // Redirect user based on their role
    private function redirectBasedOnRole($user)
    {
        switch ($user->role) {
            case 'Admin':
                return redirect('/');
            case 'Officer':
                return redirect('officer');
            case 'Alumnus':
                return redirect('alumnus');
            default:
                Auth::logout();
                return redirect('/login')->withErrors(['email' => 'Unauthorized role.']);
        }
    }

    // Validate password strength
    private function isPasswordStrong($password)
    {
        return preg_match('/^(?=.*[A-Z])(?=.*\d).{12,}$/', $password);
    }
}
