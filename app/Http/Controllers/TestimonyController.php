<?php

namespace App\Http\Controllers;

use App\Models\Testimony;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateTestimonyRequest;
use App\Models\User;


class TestimonyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonies = Testimony::with('user')->orderByDesc('created_at')->paginate(5);
        return view('template\denvir\dist\alumni-officer-testimony', compact('testimonies'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'testimony' => 'required|string',
        ]);

        Testimony::create([
            "user_id" => auth()->id(),
            "content" => $validated["testimony"],
            "rating" => 0
        ]);

        return redirect("alumnus");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $testimony_id)
    {
        try {
            $testimony = Testimony::findOrFail($testimony_id);

            $testimony->update($request->all());

            return response()->json([
                "success" => true,
                "message" => "Testimony updated successfully.",
                "testimony" => $testimony
            ]);
        } catch (\Exception $e) {
            return response()->json([
                "success" => false,
                "message" => "Failed to update testimony.",
                "error" => $e->getMessage()
            ], 500);
        }
    }


    public function update_All(Request $request)
    {
        try {
            Testimony::update($request->all());

            return response()->json([
                "success" => true,
                "message" => "Testimony updated successfully.",
            ]);
        } catch (\Exception $e) {
            return response()->json([
                "success" => false,
                "message" => "Failed to update testimony.",
                "error" => $e->getMessage()
            ], 500);
        }
    }
}
