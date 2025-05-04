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
    public function index(){
        $users = User::simplePaginate(10); 
        $authUser = auth()->id();//Logged in user

        return view('template.denvir.dist.index', compact('users', 'authUser'));
        
    }

    public function destroy($id){
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return response()->json(['success' => true, 'message' => 'User deleted successfully.']);
        } else {
            return response()->json(['success' => false, 'message' => 'User not found.']);
        }
    }
}
