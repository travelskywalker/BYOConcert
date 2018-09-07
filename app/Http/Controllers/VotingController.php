<?php

namespace App\Http\Controllers;

use App\cr;
use Illuminate\Http\Request;

class VotingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('voting.home');
    }

    public function voteSchool($school){
        return view('voting.school');
    }

    public function update(){
        return view('update.update');
    }

    public function processUpdate(Request $request){
        // return $request;
        // $file = request()->file('data');

        // $destinationPath = "/data/";
        // $file->move($destinationPath,$file->getClientOriginalName());

        $file = $request->jsondata;
        // $file->move('/data',$file);
    }
}
