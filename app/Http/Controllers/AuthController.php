<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function index(){
        return view('auth.login');
    }
    public function register(){
        // return 444;
        return view('auth.register');
    }
    public function storeUser(Request $user){

        
         $newuser = new User();
         $newuser->name = $user->name;
         $newuser->email = $user->email;
         $newuser->phone = $user->phone;
         $newuser->password = $user->password;
         $newuser->save();
        return redirect()->route('student.index')->with('success','successfully created user');
    }

  

    public function user(){
        $user = User::all();
        return view('auth.user',compact('user'));
    }


    public function check(Request $user){

        $credentials = $user->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);

        if(Auth::attempt($credentials)){
            // Session::put('key', 'value');
            
            return redirect()->intended('/profile')->cookie('user',$user->email);;
        }
        else{
            return redirect()->route('auth.login')->withErrors(['message'=>'Login Failed , Please Provide Wright Creadential']);
        }
        
    }

    public function logout(Request $request){
        //  $request->user()->currentAccessToken()->delete();
        Auth::logout();
        return redirect('/login');
        //  return redirect()->router('auth.login')->with("Success",'Logout Sussessfully Done');
    }

   
}
