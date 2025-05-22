<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AlumnusController extends Controller
{
    public function index()
    {
        return view('template.denvir.dist.alumnus-index');
    }

    public function show()
    {
        $alumnus = User::with(['jobHistory', 'testimony'])
            ->where('id', auth()->id())
            ->first();
        return view("template.denvir.dist.alumnus-profile", compact("alumnus"));
    }
}