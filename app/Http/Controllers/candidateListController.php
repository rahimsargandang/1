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
            'image' => 'required|mimes:jpg,png,jpeg',
            'status' => 'required',
            'party' => 'required',
            'elecarea' => 'required'
            
                  
        ]);

        if($request->hasfile('image'))

        {

        $file_name =  $request->image->getClientOriginalName();

       $image =  $request-> image->storeAs('images', $file_name);    


            }
        
        CandidateList::create([

                'name' =>$request ->name,
                'matricnum' =>$request ->matricnum,
                'strength' =>$request ->strength,
                'cgpa' =>$request ->cgpa,
                'faculty' =>$request ->faculty,
                'party' =>$request ->party,
                'elecarea' =>$request ->elecarea,
                'image' =>$image,
                'status' =>$request ->status,




        ]);
        
        DB::table('users')->where('id',Auth::user()->id)
        ->update([

            'has_apply'=>1

        ]);


            return redirect ('home')->with('status','Candidate Application has been submitted!');
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
        if (now() > date('2022-01-28 00:00:00')){

            return \redirect('home')->with('flashMessageProblem','You can no longer vote. Polls closed on 28 Jan');


        }
        else if(!Auth::user()->has_voted){


            $candidates = DB::table('candidate_lists')->where('status', '=', "Approved")->where('elecarea', '=', "Fakulti")->get();
            

            $candidatesU = DB::table('candidate_lists')->where('status', '=', "Approved")->where('elecarea', '=', "Umum")->get();
            return view('vote',['candidatesU'=> $candidatesU],['candidates'=> $candidates]);

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

        $elecres=DB::table('candidate_lists')->where('status', '=', "Approved")->where('elecarea', '=', "Umum")
            ->get()
            ->sortByDesc('votes_count');
        $elecresF=DB::table('candidate_lists')->where('status', '=', "Approved")->where('elecarea', '=', "Fakulti")
            ->get()
            ->sortByDesc('votes_count');
        return view('admin.electionresult',['elecres'=> $elecres],['elecresF'=> $elecresF]);

    }

    public function ongoresult(){
        $ongores=DB::table('candidate_lists')->where('status', '=', "Approved")
            ->get()
            ->sortByDesc('votes_count');
        return view('ongoresult')->with(compact('ongores'));

    }
 
}
