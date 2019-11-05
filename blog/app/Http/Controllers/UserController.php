<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Users;

class UserController extends Controller
{
  function getUser(){
    //  $data['users'] =[
    //         ['id' => 1,'name' => 'A', 'email' => 'a@gmail.com'],
    //         ['id' => 2,'name' => 'B', 'email' => 'b@gmail.com'],
    //         ['id' => 3,'name' => 'C', 'email' => 'c@gmail.com']
    //     ];
     $data['users'] = Users::all();
    return view('user', $data);
  
  }
  function getAddUser(){
    return view('add_user');

  }
  function postAddUser(request $r){
    return dd($r->full);

  }
  function getEditUser(){
    return view('edit_user');

  }

}
