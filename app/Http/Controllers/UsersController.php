<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    function login(Request $req)
    {
       
        $admin=Admin::where(['name'=>$req->name])->first();
        if(!$admin || !Hash::check($req->password,$admin->password))
        {
            return back()->with('message',"Not Matched");

        }
        else 
        {
            $req->session()->put('admin',$admin);
            return redirect('/')->with('success',"Logged In successfully");
        }
        
        
    }
}
