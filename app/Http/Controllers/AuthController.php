<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
        return redirect()->route('auth.login')->with('success','successfully created user');
    }
    public function user(){
        $user = User::all();
        return view('auth.user',compact('user'));
    }
    public function check(Request $user){
        return $user;
    }
}
