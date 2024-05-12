<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
// use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class LoginController extends Controller
{
    // this method will show login page for the user
    public function index(){
        return view('login');
    }

    public function authenticate(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users',
            'password' => 'required'
        ]);

        if($validator->passes()){

            if(Auth::attempt(['email'=> $request->email, 'password'=> $request->password])){
                return redirect()->Route('account.dashboard');
            }
            else{
                return redirect()->Route('account.login')->with('error', 'Invalid credentials');
            }
        }else{
            return redirect()->Route('account.login')
            ->withInput()
            ->withErrors($validator);
        }

    }

    public function register(){
    
        return view('register');
   }

   public function processRegister(Request $request){
       
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:25|min:3',
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed|min:6',
        'password_confirmation' => 'required|min:6',
    ]);

    if($validator->passes()){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = 'user';
        $user->save();
        

        return redirect()->Route('account.login')->with('success', 'you are successfully registered'); 
        
          }
            else{
            return redirect()->route('account.register')
            ->withInput()
            ->withErrors($validator);
        }

    }
    public function logout(){
        Auth::logout();
        return redirect()->Route('account.login');
    }
}