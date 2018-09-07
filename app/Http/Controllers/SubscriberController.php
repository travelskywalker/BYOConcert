<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function subscribe($email){

        $exist = Subscriber::where('email' , '=', $email)->get();

        if(count($exist) > 0 ){
            return response()->json(['message'=>'existing']);
        }else{
            Subscriber::create(['email'=>$email]);
            return response()->json(['message'=>'success']);
        }
        
    }

    public function subscribers(){
        $subscribers = Subscriber::all();

        return view('api.subscribers')->with('subscribers',$subscribers);
    }
}
