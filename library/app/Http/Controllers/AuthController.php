<?php

namespace App\Http\Controllers;

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
            session()->put("is_login","true");
            return to_route("dashboard");
        }else{
            return to_route("dashboard");
        }
    }
}
