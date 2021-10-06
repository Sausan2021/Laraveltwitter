<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;
use Auth;
//use App\User;
class TweetsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function timeline(){
     $data['tweets']= Tweet::all();
      // $data['tweets']= [];
      return view('tweets.timeline', $data);
       //return view('tweets.timeline');
    }
    public function displayTweetdetails($tweet_id){
        $data['tweet']=Tweet::findOrfail($tweet_id);
        return view('tweets.tweet-details', $data);  
    }


    public function createTweet(Request $request)
    {
      // return "it works";
       //return $request;
       $tweet = new Tweet();
       $tweet->content = $request->tweet_content;
       $tweet->user_id = Auth::user()->id;
       $tweet->save();
      // $tweet->user_id = Auth::id();
       // return back();
      } 
}   
  

