<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\CandidateList;

class candidateListController extends Controller
{
    public function submitItem(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'matricnum' => 'required',
            'strength' => 'required',
            'cgpa' => 'required',
            'faculty' => 'required',
        ]);
        
        CandidateList::create($request->all());

        return redirect('applications');
    }
    
}

/** 
$newCandidateList = new CandidateList;
$newCandidateList->name = $request->candidateList;
$newCandidateList->matricnum = $request ->candidateList;
$newCandidateList->strength = $request ->candidateList;
$newCandidateList->cgpa = $request -> candidateList;
$newCandidateList->faculty = $request ->candidateList;
$newCandidateList->save();
*/