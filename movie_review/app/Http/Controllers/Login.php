<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\user_date;

class Login extends Controller
{
    //
    function userLogin(Request $req){
        $userData=user_date::all();
        $data = $req->input();
        $salt = 'XyZzy12*_';
        $check = hash('md5', $salt.$data['psw']);
        $flag=0;
        if($data['uname']=='admin' && $data['psw']=='1234Admin'){
            $req->session()->put('user',$data['uname']);
            return redirect('/insert');
        }
        foreach($userData as $value){
            if($data['uname']==$value->uname && $check==$value->psw){
                $flag=1;
            }
        }
        if($flag==0){
        $req->session()->flash('failure','Incorrect username and password');
        return redirect('/');
        }
        $req->session()->put('user',$data['uname']);
        return redirect('index');
        // echo $flag;
    }
}
