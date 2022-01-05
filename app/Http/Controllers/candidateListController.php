<?php

namespace App\Http\Controllers;

use App\Models\CandidateList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        if(!Auth::user()->has_voted){


            $candidates = DB::table('candidate_lists')->where('status', '=', "Approved")->get();
            return view('vote',['candidates'=> $candidates]);

        }else{

            return redirect('home')->with('flashMessageProblem','You have already voted! You only can vote once!');


        }


    }

    public function castVote(Request $request)
    {
       

       $candidateId = $request ->input('candidateId');
       

       foreach($candidateId as $cid){
       DB::table('candidate_lists')->where('id',$cid)
        ->update ([
            
                'votes_count' =>DB::raw("votes_count + 1")

        ]);}


        DB::table('users')->where('id',Auth::user()->id)
        ->update([

            'has_voted'=>1

        ]);
        
        return redirect('home')->with('flashMessage','You have successfully voted. Thank you for your vote!');

    }
}
