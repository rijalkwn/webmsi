<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index()
    {
        return view("/Login/HalLogin");
    }

    function login(Request $request)
    {
        Session::flash('name',$request->name);
        $request->validate([
            'name'=>'required',
            'password'=> 'required'
        ],[
            'name.required'=> 'Username wajib diisi',
            'password.required'=> 'password wajib diisi'
        ]);

        $infologin = [
            'name' => $request->name,
            'password'=> $request->password
        ];


        if (Auth::attempt($infologin)){
            return redirect('/Dashboard')->with('message','Berhasil Login!');
        }else{
            return redirect("Login")->withErrors(['email / password yang dimasukkan tidak valid!']);
        }
    }

    function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/')->with('success','Berhasil logout');
    }
}