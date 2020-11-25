<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    //
    function userLogin(Request $req){
        $data = $req->input();
        $req->session()->put('user',$data['uname']);
        return redirect('index');
        // echo session('user');
    }
}
