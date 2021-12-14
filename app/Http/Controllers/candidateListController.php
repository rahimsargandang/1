<?php

namespace App\Http\Controllers;

use App\Models\CandidateList;
use Illuminate\Http\Request;


class candidateListController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'matricnum' => 'required',
            'strength' => 'required',
            'cgpa' => 'required',  
            'faculty' => 'required',
                
        ]);
        
        CandidateList::create($request->all());

            return redirect ('applications');
    }
    
    public function index()
    {

            $candidate_lists=CandidateList::all();
            return view('admin.candidateinfo')->with(compact('candidate_lists'));


    }

    // public function show($id)
    // {
    //     //
    //     $candidate_lists = CandidateList::find($id);
    //     return view('candidate.index')->with(compact('candidate_lists'));
    // }


}
