<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // Check if the email already exists in the database
    public function checkEmail(Request $request)
    {
        $email = $request->query('email');
        $exists = User::where('email', $email)->exists(); // Assuming you're using the User model
        return response()->json(['exists' => $exists]);
    }

    // Check if the password meets the strength criteria
    public function checkPasswordStrength(Request $request)
    {
        $password = $request->query('password');
        $strength = $this->checkPassword($password);  // Check the password strength
        return response()->json(['strong' => $strength]);
    }   

    // Private method to validate the password strength
    private function checkPassword($password)
    {
        return preg_match('/^(?=.*[A-Z])(?=.*\d)[A-Za-z\d@$!%*?&]{8,}$/', $password);
    }
}
