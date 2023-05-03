<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB, Hash;;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class adminUserController extends Controller
{
    // public function insertform(){
    //     return view('welcome');
    // }
    public function insert(Request $request){

        $request->validate([
            'full_name' => 'required|string|max:20',
            'email' => 'required|email|unique:adminUser',
            'phone_number' => 'required|digits:10',
            'password' => 'required|alpha_num|min:6',
        ]);


        $full_name = $request->input('full_name');
        $email = $request->input('email');
        $phone_number = $request->input('phone_number');
        $password= $request->input('password');
        $data=array('full_name'=>$full_name,"email"=>$email,"phone_number"=>$phone_number, "password"=>Hash::make($request->password));
        DB::table('adminUser')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/add-user">Click Here</a> to go back.';
        echo '<a href = "/user-list">Click Here</a> to go User list.';
    }

    public function insertform(){
        $users = DB::select('select * from adminUser');
        return view('admin/user/user-list',['users'=>$users]);
    }

    public function editUser(){
        $users = DB::select('select * from adminUser');
        return view('admin/user/user-list',['users'=>$users]);
    }

    public function deleteUser($id){
        {
            DB::delete('delete from adminUser where id = ?',[$id]);
            echo "Record deleted successfully.<br/>";
            echo '<a href = "/user-list">Click Here</a> to go User list.';
         }
    }

    public function editUsers(Request $request,$id) {

        $request->validate([
            'email' => 'required|email|unique:adminUser'
        ]);

        $users = \App\Models\LoginModel::find($id);
        $full_name = $request->input('full_name');
        DB::update('update adminUser set full_name = ? where id = ?',[$full_name,$id]);
        //return view('admin/user/user-list',['users'=>$users]);
        echo "Record updated successfully.<br/>";
        echo '<a href = "/user-list">Click Here</a> to go back.';
     }

}
