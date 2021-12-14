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
    
}

/** 
'name' => 'required',
'matricnum' => 'required',
'strength' => 'required',
'cgpa' => 'required',
'faculty' => 'required',
*/