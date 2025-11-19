<?php
namespace App\Http\Controller;

use App\Models\User;
use Illuminate\Support\Facade\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;



class AuthController extends Controller {
    function showRegister(){
        return view('authentication.register');
    }

    function showLogin(){
        return view('authentication.login');
    }
    function register(Request $request){
       $request->validate([
            'full_name' => 'required|string|max:255',
            'email'     => 'required|email|unique',
            'password'  => 'required|min:6|confirmed'
       ]);
       
        User::create([
            'full_name' => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password)
        ]);
    
    return redirect()->route('login.form')-> with('success','registration succesful!');
    }
    function login(Request $request){

    }
}