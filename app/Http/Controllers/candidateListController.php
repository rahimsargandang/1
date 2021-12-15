<?php

namespace App\Http\Controllers;

use App\Models\CandidateList;
use Illuminate\Http\Request;
use DB;


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

            $candidate_lists=DB::table('candidate_lists')->where('status', '=', "Pending")->get();;
            return view('admin.candidateinfo')->with(compact('candidate_lists'));


    }

    public function appcandidate()
    {

            $candidate_approved=DB::table('candidate_lists')->where('status', '=', "Approved")->get();;
            return view('admin.approvecandidate')->with(compact('candidate_approved'));
    }

    public function approved($id)
    {
        //
        $candidate_approved=CandidateList::find($id);
        $candidate_approved->status='Approved';
        $candidate_approved->save();
        return redirect()->back();
    }

    public function rejected($id)
    {
        //
        $candidate_approved=CandidateList::find($id);
        $candidate_approved->status='Rejected';
        $candidate_approved->save();
        return redirect()->back();
    }

}
