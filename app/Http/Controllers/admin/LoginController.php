<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    // this method will return the admin    login page 
    public function index(){
        return view('admin.login');

    }


    // this method will Authenticate the admin

    public function authenticate(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if($validator->passes()){

            if(Auth::guard('admin')->attempt(['email'=> $request->email, 'password'=> $request->password])){

                
                if(Auth::guard('admin')->user()->role != 'admin'){
                    Auth::guard('admin')->logout();
                    return redirect()->Route('admin.login')->with('error', 'You are not authorized to access this page');
                }
                else{
                    // echo " hello, Login Success";
                    return redirect()->Route('admin.dashboard');

                }

            }
            else{
                return redirect()->Route('admin.login')->with('error', 'Invalid credentials');
            }
        }else{
            return redirect()->Route('admin.login')
            ->withInput()
            ->withErrors($validator);
        }

    }
    // this method will logout the admin user
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->Route('admin.login');
    }
    
}
