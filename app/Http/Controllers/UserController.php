<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $users = User::simplePaginate(10);
        $authUser = auth()->id();//Logged in user

        return view('template.denvir.dist.index', compact('users', 'authUser'));

    }

    public function destroy($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return response()->json(['success' => true, 'message' => 'User deleted successfully.']);
        } else {
            return response()->json(['success' => false, 'message' => 'User not found.']);
        }
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('template.denvir.dist.user-edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return response()->json(['success' => true, 'message' => 'User updated successfully.']);
    }

    public function updateProfilePicture(Request $request)
    {
        // Validate the image
        $request->validate([
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Rename the image by the auth()->user()->full_name
        $user = auth()->user();
        $extension = $request->file('profile_picture')->getClientOriginalExtension();
        $fileName = preg_replace('/\s+/', '_', strtolower($user->full_name)) . '.' . $extension;

        // Check first if the $fileName exists in the path, if so, replace the old one
        $filePath = storage_path('app/public/images/' . $fileName);
        if (file_exists($filePath)) {
            unlink($filePath);
        }

        //Image save to app/public/images/
        $request->file('profile_picture')->storeAs('images', $fileName, 'public');

        //update profile in database
        User::where('id', $user->id)->update([
            "profilePicture" => $fileName,
        ]);

        return redirect("/alumnus/profle");
    }

    public function privacySetting(Request $request)
    {
        if ($request->donation_Visibility == null) {
            $request["donation_Visibility"] = "0";
        }
        if ($request->testimonial_Visibility == null) {
            $request["testimonial_Visibility"] = "0";
        }
        if ($request->job_Visibility == null) {
            $request["job_Visibility"] = "0";
        }
        try {
            $data = $request->except('_token');
            User::where('id', auth()->user()->id)->update($data);
            return response()->json(['success' => true, 'message' => '']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e]);
        }
    }
}
