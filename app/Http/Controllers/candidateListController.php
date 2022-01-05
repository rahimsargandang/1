<?php

namespace App\Http\Controllers;

use App\Models\CandidateList;
use Illuminate\Http\Request;
use DB;


class candidateListController extends Controller
{
    public function store(Request $request)
    {
        $candidate_lists=   $request->validate([

            'name' => 'required',
            'matricnum' => 'required',
            'strength' => 'required',
            'cgpa' => 'required',  
            'faculty' => 'required',
            'status' => 'required'
            // 'votes_count' => '0',
                  
        ]);

        if($request->hasfile('image'))
            {
                $file=$request->file('image');
                $extention=$file->getClientOriginalExtension();
                $filename=time().'.'.$extention;
                // $file->storeAs('/uploads/candidate_lists/', $filename);
                // $file->photo->path('/uploads/candidate_lists/');
                // $file->storeAs(public_path('/uploads/candidate_lists'),$filename);
                $file->move('uploads/candidate_lists/', $filename);
                $candidate_lists->image=$filename;
            }
            $candidate_lists->save();
        
        CandidateList::create($request->all());

            return redirect ('applications')->with('status','Image Added Successfully');
    }
    
    public function index()
    {

            $candidate_approved=DB::table('candidate_lists')->where('status', '=', "Pending")->get();;
            return view('admin.approvecandidate')->with(compact('candidate_approved'));


    }

    public function appcandidate()
    {

            $candidate_lists=DB::table('candidate_lists')->where('status', '=', "Approved")->get();;
            return view('admin.candidateinfo')->with(compact('candidate_lists'));
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

    public function votingpage()
    {
        $candidates = DB::table('candidate_lists')->where('status', '=', "Approved")->get();
        return view('vote',['candidates'=> $candidates]);
    }

}
