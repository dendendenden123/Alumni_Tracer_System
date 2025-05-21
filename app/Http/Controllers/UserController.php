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

        // Store the image in storage/app/public/images
        $path = $request->file('profile_picture')->store('images', 'public');

        dd("scuess");
    }
}
