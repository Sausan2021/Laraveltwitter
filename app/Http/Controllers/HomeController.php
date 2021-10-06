<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
class HomeController extends Controller
{
    public function languageDemo(){
        return view('languageDemo');
            }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['hello']);
        //any function=auth
    }
     
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function hello(){
        //return "Hello";
        $firstWord ="Oman";
        $secondWord="KSA";
        //User is logged in
        // if(Auth::check())
        // {
        //    // echo $firstWord;
        //    echo "you are logged in";
        //    //echo Auth::user()->name;
        // }
        // else{
        //    // echo $secondWord;
        //    echo "you are NOT logged in";
        //     //echo Auth::user()->email;
        // }
        //$user= User::where('id',1)->first(); //if I use with if then==    return $user->name . "|" . $user->email;
        //with if also I can use: //  $user= User::where('id','>',2)->get();  (error collection)->array -=so I make [return $user[0]->name; ] ->error undefine set 0
       //if I use array:  //  $user= User::where('id',1)->get();  return $user[0]->name. "|" . $user[0]->email;

            $user= User::where('id',2)->first();
            if($user){
            return $user->name;
        }
        else
        {
            echo "User NOT found";
        }
    }
       
}
