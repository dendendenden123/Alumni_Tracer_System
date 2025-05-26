<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reaction;

class ReactionController extends Controller
{
    public function store(Request $request)
    {
        try {
            if (Reaction::where('user_id', auth()->user()->id)->exists()) {
                return $this->update($request);
            }
            Reaction::create([
                'user_id' => auth()->user()->id,
                'testimony_id' => $request->testimony_id,
                'reaction_type' => $request->reaction,
            ]);

            return response()->json(['success' => true, 'message' => 'Reaction created successfully.']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'An error occurred.', 'error' => $e->getMessage()], 500);
        }
    }

    public function update(Request $request)
    {
        try {
            Reaction::where('user_id', auth()->user()->id)
                ->where('testimony_id', $request->testimony_id)
                ->update([
                    'reaction_type' => $request->reaction,
                ]);

            return response()->json(['success' => true, 'message' => 'Reaction updated successfully.']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'An error occurred.', 'error' => $e->getMessage()], 500);
        }
    }
}
