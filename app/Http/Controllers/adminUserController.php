<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class adminUserController extends Controller
{
    // public function insertform(){
    //     return view('welcome');
    // }
    public function insert(Request $request){
        $full_name = $request->input('full_name');
        $email = $request->input('email_id');
        $phone_number = $request->input('phone_number');
        $password= $request->input('password');
        $data=array('full_name'=>$full_name,"email_id"=>$email,"phone_number"=>$phone_number, "password"=>$password);
        DB::table('adminUser')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/add-user">Click Here</a> to go back.';
    }

    public function insertform(){
        $users = DB::select('select * from adminUser');
        return view('admin/user/user-list',['users'=>$users]);
    }

}
