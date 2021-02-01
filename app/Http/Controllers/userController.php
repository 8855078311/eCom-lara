<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
//use Illuminate\User;
use App\Models\User;

class userController extends Controller
{
    //
    function login(Request $req)
    {
        //return $req->input();
        return User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "username or password is not match";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }

}
