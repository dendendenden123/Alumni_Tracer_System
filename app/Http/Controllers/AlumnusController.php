<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Testimony;


class AlumnusController extends Controller
{
    public function index()
    {
        $testimonies = Testimony::with('user')->orderByDesc('created_at')->get();
        return view('template.denvir.dist.alumnus-index', compact('testimonies'));
    }

    public function show()
    {
        $alumnus = User::with(['jobHistory', 'testimony', "donation"])
            ->where('id', auth()->id())
            ->first();
        return view("template.denvir.dist.alumnus-profile", compact("alumnus"));
    }

    public function showOtherProfile(Request $request, $id)
    {
        if (auth()->user()->id == $id) {
            return redirect("/alumnus/profle");
        }
        $user = User::findOrFail($id);
        $alumnus = User::with(['jobHistory', 'testimony', "donation"])
            ->where('id', $id)
            ->first();


        return view('template.denvir.dist.alumnus-other-profile', compact('user', 'alumnus'));
    }
}