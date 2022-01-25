<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ongores=DB::table('candidate_lists')->where('status', '=', "Approved")
        ->get()
        ->sortByDesc('votes_count');
        $piechartres=DB::table('candidate_lists')->where('status', '=', "Approved")
        ->get();

    $chartData="";
    foreach($piechartres as $show){
        $chartData.="['".$show->party."',".$show->votes_count."],";
     }
    //echo $chartData;
    
    $arr['chartData'] =rtrim($chartData,",");

    return view('home',[ "arr" => $arr, "ongores"=>$ongores]);
    }

}
