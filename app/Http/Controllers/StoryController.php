<?php

namespace App\Http\Controllers;
use App\Models\Story;
use App\Models\User;
use App\Models\Following;
use App\Models\Privacy;
use Illuminate\Http\Request;

class StoryController extends Controller
{




    public function story(){
        $collection=auth()->user()->following()->pluck("friend");

 $stories=Story::whereIn("user_id",$collection)->orderBy("created_at","DESC")->get();

// return $collection;

        // $privacy=Privacy::where("');
        // return $privacy;
        // $authData=\Auth::id();
 // return $authData;
// $collection=auth()->user()->following()->where("privacy_id",'2')->pluck("created_by_user_id");
// $stories=Story::whereIn("user_id",$authData)->get();
// $collection=\Auth()->User()->stories()->get("title");

// return $stories;
// return response()->json($stories, 200);
 return view('storiess',compact("stories"));

}
}
