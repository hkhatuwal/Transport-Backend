<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home()
    {
        return view("index",);
        # code...
    }
    public function users_table()
    {
        return view('users',["name"=>"himanshu"]);
        # code...
    }
    public function show_posts(Request $request)
    {
        return view('posts',["id"=>$request->id]);
        # code...
    }
    public function show_map(Request $request)
    {
        # code...
        return view("map",["id"=>$request->id]);
    }
    public function auth(Request $request)
    {
        $pwd=$request->password;
        $emai=$request->email;
        $result=DB::table("admin")->where([["password","=",$pwd],["username","=",$emai]])->get();
        if(count($result)>=1){
            session()->put('user',"true");
         return    redirect('/');
        }
        else{
            return "Login Failed Please Try Again";
        }

        // return "Hello";
        
    
          
        # code...
    }
    public function show_readings(Request $request)
    {
        return view("readings",['id'=>$request->id]);
        # code...
    }
    public function logout()
    {
        session()->flush();
        return redirect('login');
        # code...
    }
}
