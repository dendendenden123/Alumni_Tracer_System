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

        return view('template.denvir.dist.index', compact('users'));
    }
}
