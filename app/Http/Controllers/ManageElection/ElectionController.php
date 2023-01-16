<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ManageElection\Election;

class ElectionController extends Controller
{
    public function create()
    {
        return view('ManageElection.ApplyForElection');
    }

    public function store(Request $request)
    {
        $candidate = new Candidate;
        $candidate->candidatename = $request->input('candidatename');
        $candidate->yearofstudy = $request->input('yearofstudy');
        $candidate->course = $request->input('course');
        $candidate->category = $request->input('category');
        $candidate->manifesto = $request->input('manifesto');
        $candidate->picture = $request->input('picture');
        $candidate->save();
        return redirect('add');
    }

}
