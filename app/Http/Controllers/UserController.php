<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Nette\Utils\Strings;


// class UserController extends Controller
// {
//     public function showUser(){
//         $users = DB::table('users')->get();
//         return view('account.dashboard', ['data' => $users]);

//     }
// }

class UserController extends Controller
{

    // view all user information
    public function showUser(){
        $users = DB::table('users')->get();
        // return $users;
        return view('test', ['data' => $users]);


    }

    // view single user details information
    public function singleUser(String $id){
        $users = DB::table('users')->where('id',$id) ->get();
        // return $users;
        return view('singleUser', ['data' => $users]);
    }
}


