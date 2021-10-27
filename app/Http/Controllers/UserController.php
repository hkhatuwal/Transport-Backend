<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function get_users()
    {
        $user= new User();
        $res=$user::all();
        return $res;
        # code...
    }
    public function get_users_by_id(Request $request)

    {
        $id=$request->id;

        $res=DB::table('users')->where('id',$id)->get();       
         return $res[0];
        # code...
    }
    public function login(Request $request)
    {
        $res=[];
        $id=$request->id;
        $user=new User();
        $result=DB::table('users')->where('vehicle_number',$id)->get();
        if (count($result)<=0) {

$res["record_found"]=false;
$res["id"]=$this->create($id)->id;


            # code...
        }
        else{
            $res["record_found"]=true;
            $res["id"]=$result[0]->id;
        }
        # code...
        return $res;
    }
    public function create( $vehicle_no)

    {
        $user =new User();
        $user->vehicle_number=$vehicle_no;
        $user->latitude="0";
        $user->longitude="0";
        $data=$user->save();
        return $user;

        # code...
    }
    public function admin_login(Request $request)
    {
        $res=false;
        $user=DB::table("admin")->where([["username","=",$request->username],["password","=",$request->password]])->get();
        # code...
        if (count($user)<=0) {
            # code...
            $res=false;
        }
        else{
            $res=true;
        }
    return json_encode($res);
    }
}
