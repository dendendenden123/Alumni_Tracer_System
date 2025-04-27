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
    public function register(Request $request) {
         $request->validate([
            'full_name' => 'required|string',
            'phone_number' => 'required|string',
            'address' => 'required|string',
            'dob' => 'required',
            'degree' => 'required|string',
            'graduation_year' => 'required|string',
            'job_title' => 'required|string',
            'company' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
        ]);

        $user = User::create($request->except('password_confirmation'));

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
                    return redirect("/");
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
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
            return redirect('/login'); // or wherever you want
    }

    public function checkEmail(Request $request)
    {
        $email = $request->query('email');
        $exists = User::where('email', $email)->exists();
        return response()->json(['exists' => $exists]);
    }

    // Check if the password meets the strength criteria
    public function checkPasswordStrength(Request $request)
    {
        $password = $request->query('password');
        $strength = $this->checkPassword($password);
        return response()->json(['strong' => $strength]);
    }   

    // Private method to validate the password strength
    private function checkPassword($password)
    {
        return preg_match('/^(?=.*[A-Z])(?=.*\d).{12,}$/', $password);
    }
    

    // Send email confirmation code
    // This method generates a random 6-digit code and sends it to the user's email
    public function sendMailConfirmation(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        $email = $request->email;
        $code = rand(100000, 999999);
        session(['email_verification_code_' . $email => $code]);
        Mail::to($email)->send(new EmailConfirmation($code));
    
        return response()->json(['success' => true]);
    }

    // Verify the email confirmation code
    // This method checks if the code entered by the user matches the one stored in the session
    public function verifyMailConfirmation(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'code' => 'required'
        ]);
    
        $sessionKey = 'email_verification_code_' . $request->email;
        $storedCode = session($sessionKey);
    
        if ($storedCode && $storedCode == $request->code) {
            session()->forget($sessionKey); // Optional: clear after use
            return response()->json(['success' => true]);
        }
    
        return response()->json(['success' => false, 'message' => 'Invalid or expired code.']);
    }
}
