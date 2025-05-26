<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\JobHistory;
use App\Models\Testimony;
use App\Models\donation;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\OfficerCredential;

class AlumniOfficerController extends Controller
{

    public function index()
    {
        $users = User::with(["jobHistory", "testimony", "donation"])->get();
        $donation = donation::all();
        $jobHistory = JobHistory::all();
        $testimonies = Testimony::with("user")->get();
        return view('template.denvir.dist.alumni-officer', compact('users', 'donation', 'jobHistory', 'testimonies'));

    }
    public function store(Request $request)
    {
        $email = $request->input('email-id-column');
        $password = Str::random(8); // or whatever password generation you use

        // Save to DB (make sure password is hashed if used for login)
        User::create([
            'name' => $request->input('fname-column') . ' ' . $request->input('lname-column'),
            'email' => $email,
            'role' => 'Officer',
            'password' => Hash::make($password),
        ]);

        // Send email
        Mail::to($email)->send(new OfficerCredential($email, $password));

        return redirect()->back()->with('success', 'Alumni Officer account successfully created and email sent!');
    }
}
