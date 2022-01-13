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

                $path = $file->storeAs('image', $filename);

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

    public function assignpos()
    {
            
            $assignpos=DB::table('candidate_lists')->where('status', '=', "Approved")->get();;
            return view('admin.assignposition')->with(compact('assignpos'));
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

    public function count(){

        $totalvoter=DB::table('users')->where('user_type', '=', '')->orWhereNull('user_type')->count();;
        $totalhasvoted=DB::table('users')->where('has_voted', '=', "1")->count();;
        $totalcandidate=DB::table('candidate_lists')->where('status', '=', "Pending")->count();;
        $counts=DB::table('candidate_lists')->where('status', '=', "Approved")->count();;
        return view('admin.dashboard', [ "counts" => $counts, "totalcandidate"=>$totalcandidate, "totalhasvoted"=>$totalhasvoted,"totalvoter"=>$totalvoter ]);
    }

    public function elecres(){

        $elecres=DB::table('candidate_lists')->where('status', '=', "Approved")
            ->get()
            ->sortByDesc('votes_count');
        return view('admin.electionresult')->with(compact('elecres'));

    }
}
