<?php

namespace App\Http\Controllers;

use App\Nomination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NominationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        date_default_timezone_set('Asia/Manila');
        $d = "18/07/2018";
        $t = "23:59";
        if(date('d/m/Y') == $d && date("H:i") >= $t){
            return redirect()->route('tabulating');
        }else{
            return view('nomination');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->school_name = strtoupper($request->school_name);
        Nomination::create($request->all());

        // return view('nomination.submitted');
        // $submitted = true;
        return redirect()->route('submitted');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nomination  $nomination
     * @return \Illuminate\Http\Response
     */
    public function show(Nomination $nomination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nomination  $nomination
     * @return \Illuminate\Http\Response
     */
    public function edit(Nomination $nomination)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nomination  $nomination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nomination $nomination)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nomination  $nomination
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nomination $nomination)
    {
        //
    }

    public function getSchool($name){

        $school_array = array("TIP Manila","TIP QC","UST","University of Makati","Colegio de san Juan de Letran","UE Manila","Manila Central University", "Philippine Normal University","STI Cainta","UP Diliman", "ADMU", "DLSU Taft", "FEU Morayta", "Adamson University", "National University", "San Beda University", "Letran", "Lyceum", "Mapua University", "Letran Knights" );

        $in_array = [];
        foreach($school_array as $key=>$value){
            if (strpos(strtolower($value), strtolower($name)) !== false) {
                array_push($in_array, $value);
            }
        }

        // print_r($in_array);
    
        // $schools = Nomination::groupBy('school_name')->get();
        $schools = DB::table('nominations')
             ->select('school_name')
             ->where('school_name', 'like', '%' . $name . '%')
             ->limit(5)
             ->groupBy('school_name')->get();


        $school_list = $schools;
        // print_r($school_list);

        // foreach($in_array as $k=>$v){
        //     foreach($schools as $school){
        //         if(strtolower($v) != strtolower($school->school_name)){
        //             echo $v;
        //             // array_merge($myArray, array('three' => 'TheThree', 'four' => 'TheFour'));
        //             // array_merge($school_list, array('school_name' => $v));
        //             $school = array('school_name'=>$v);
        //             array_merge($school_list,$school);
        //         }
        //     }
        // }

        // just to view the array
        // echo "------<br/>";

        // foreach($school_list as $s){
        //     echo $s->school_name;
        // };

        // return view('nomination.schools')->with(['schools'=>$schools, 'suggested_schools'=>$in_array]);
        return response()->json(['schools'=>$schools, 'suggested_schools'=>$in_array]);
    }

    public function submitted($s=false){
        // $submitted;

        return view('nomination.submitted')->with('redirect',$s);
        // return $submitted;
    }

    public function isNameRecorded($name){
        $user = DB::table('nominations')
         ->select('name')
         ->where('name', '=', $name)
         ->get();

        if(count($user) > 0){
            $isNameRecorded = (bool)true;
        }else{
            $isNameRecorded = (bool)false;
        }

        return response()->json(['isNameRecorded'=>$isNameRecorded]);
    }

    public function nominationResult(){
        $result = DB::table('nominations')->take(50)
            ->selectRaw('school_name, COUNT(*) as vote_count')
            ->orderby('vote_count','desc')
            ->groupBy('nominations.school_name')
            ->get();

        // return view('result')->with(['result'=>$result]);
        return response()->json(['data'=>$result]);
    }

    public function allResult(){
        $result = DB::table('nominations')
            ->selectRaw('school_name, COUNT(*) as vote_count')
            ->orderby('vote_count','desc')
            ->groupBy('nominations.school_name')
            ->get();

        return view('api.all')->with('data',$result);
    }
}
