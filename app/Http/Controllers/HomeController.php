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
        $ongores=DB::table('candidate_lists')->where('status', '=', "Approved")->distinct()
        ->get()
        ->sortByDesc('votes_count');
        $elecfac=DB::table('candidate_lists')->where('status', '=', "Approved")
        ->where('elecarea', '=', "Fakulti")
        ->get()
        ->sortByDesc('votes_count');
        $elecpub=DB::table('candidate_lists')->where('status', '=', "Approved")
        ->where('elecarea', '=', "Umum")
        ->get()
        ->sortByDesc('votes_count'); 
        $piechartres=DB::table('candidate_lists')->select('party','votes_count')->distinct()
        ->where('status', '=', "Approved")
        ->get();
        $piechartres2=DB::table('candidate_lists')->select('name','votes_count')->distinct()
        ->where('elecarea', '=', "Fakulti")
        ->where('status', '=', "Approved")
        ->get();
        $piechartres3=DB::table('candidate_lists')->select('name','votes_count')->distinct()
        ->where('elecarea', '=', "Umum")
        ->where('status', '=', "Approved")
        ->get();

    $chartData="";
    foreach($piechartres as $show){
        $chartData.="['".$show->party."',".$show->votes_count."],";
     }
    $arr['chartData'] =rtrim($chartData,",");

    $chartData2="";
    foreach($piechartres2 as $show){
        $chartData2.="['".$show->name."',".$show->votes_count."],";
     }
    $arr2['chartData2'] =rtrim($chartData2,",");

    $chartData3="";
    foreach($piechartres3 as $show){
        $chartData3.="['".$show->name."',".$show->votes_count."],";
     }
    $arr3['chartData3'] =rtrim($chartData3,",");

    return view('home',[ "arr" => $arr, "arr2" => $arr2,"arr3" => $arr3, "ongores"=>$ongores, "elecfac"=>$elecfac, "elecpub"=>$elecpub]);
    }

}
