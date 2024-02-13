<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $user = User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password)){
                return redirect()->back()->with('alert','username password does not match');
        }
        else{
            $req->session()->put('user',$user); 
            return redirect('/');
        }
}


function create(Request $req)
{
    $req->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required',
    ]);

    $user = new User();
    $user->name = $req->name;
    $user->email = $req->email;
    $user->password = Hash::make($req->password);
    $res = $user->save();
    return view('login');


}

}


