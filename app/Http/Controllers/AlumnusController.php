<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnusController extends Controller
{
    public function index()
    {
        return view('template.denvir.dist.alumnus-index');
    }

    public function show()
    {
        return view("template.denvir.dist.alumnus-profile");
    }
}