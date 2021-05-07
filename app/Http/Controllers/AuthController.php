<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    User
};

use Auth;

class AuthController extends Controller
{
    function index(Request $request){
        if(Auth::check()){
            return redirect("/");
        }

        return view("login");
    }

    function login(Request $request){
        
        $user = User::where("email", $request->email)->first();
        if($user){
            $credentials = $request->only('email', 'password');
            if(Auth::attempt($credentials)){
                return response()->json([]);
            }

            return response()->json([
                "error" => "Your email and password combination is invalid!"
            ], 401);
        }

        return response()->json([
            "error" => "User not found!"
        ], 400);
    }

    function logout(){
        Auth::logout();
        return redirect("/login");
    }
}
