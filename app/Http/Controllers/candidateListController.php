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
            'status' => 'required'
                
        ]);
        
        CandidateList::create($request->all());

            return redirect ('applications');
    }
    
    public function index()
    {

            $candidate_lists=CandidateList::all();
            return view('admin.candidateinfo')->with(compact('candidate_lists'));


    }

    public function approved($id)
    {
        //
        $candidate_lists=CandidateList::find($id);
        $candidate_lists->status='Approved';
        $candidate_lists->save();
        return redirect()->back();
    }

    public function rejected($id)
    {
        //
        $candidate_lists=CandidateList::find($id);
        $candidate_lists->status='Rejected';
        $candidate_lists->save();
        return redirect()->back();
    }

}
