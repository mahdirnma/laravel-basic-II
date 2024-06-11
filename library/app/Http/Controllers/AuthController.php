<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserLoginRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signin(StoreUserRequest $request)
    {
        $firstname=$request->firstname;
        $lastname=$request->lastname;
        $national_code=$request->national_code;
        $age=$request->age;
        $username=$request->username;
        $password=$request->password;
        $user=User::create([
            "firstname"=>$firstname,
            "lastname"=>$lastname,
            "national_code"=>$national_code,
            "age"=>$age,
            "username"=>$username,
            "password"=>$password
        ]);
        if ($user){
            session()->put("is_login",true);
            return to_route("dashboard");
        }else{
            return to_route("signin.show");
        }
    }

    public function login(StoreUserLoginRequest $request)
    {
        $username=$request->username;
        $password=$request->password;
        $user=User::where("username",$username)->where("password",$password);
        if ($user->count()==1){
            session()->put("is_login",true);
            return to_route("dashboard");
        }else{
            return to_route("login.show");
        }
    }

    public function logout()
    {
        if (!(session()->has("is_login")))
            return view('login');
        session()->forget("is_login");
        return to_route("login");
    }

    public function logoutGet()
    {
        if (!(session()->has("is_login")))
            return view('login');
        return to_route('dashboard');
    }
}
