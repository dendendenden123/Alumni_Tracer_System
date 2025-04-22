<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailConfirmation;

class EmailVerificationController extends Controller
{
    public function send(Request $request)
    {
        $request->validate(['email' => 'required|email']);
    
        $code = rand(100000, 999999);
        session(['email_verification_code' => $code, 'verification_email' => $request->email]);
    
        Mail::to($request->email)->send(new EmailConfirmation($code));
    
        return response()->json(['success' => true]);
    }
    
    public function verify(Request $request)
    {
        if (
            $request->code == session('email_verification_code') &&
            $request->email == session('verification_email')
        ) {
            session()->forget(['email_verification_code', 'verification_email']);
            return response()->json(['success' => true]);
        }
    
        return response()->json(['success' => false, 'message' => 'Code does not match.']);
    }
}
