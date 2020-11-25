<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUp extends Controller
{
    //
    function userSign(Request $req){
        $data = $req->input();
        $req->session()->put('user',$data['uname']);
        return redirect('index');
        // echo session('user');
    }
}
