<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobHistory;
use App\Models\User;

class JobHistoryController extends Controller
{

    public function index()
    {
        $users = User::with('jobHistory')->get();
        $jobs = JobHistory::with('user')->get();
        return view('template.denvir.dist.job-tracking', compact('jobs', 'users'));
    }
    public function store(Request $request)
    {

        try {
            $data = $request->all();
            $data['user_id'] = auth()->user()->id;

            // Encrypt the entire $data array before saving
            $data['encrypted_payload'] = encrypt(json_encode($data)); // Laravel's encrypt()

            // Optionally, you may want to only store encrypted_payload
            JobHistory::create([
                'user_id' => $data['user_id'],
                'encrypted_payload' => $data['encrypted_payload'],
            ]);

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }

    }
}
