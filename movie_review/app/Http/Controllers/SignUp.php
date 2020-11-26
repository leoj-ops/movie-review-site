<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\user_date;

class SignUp extends Controller
{
    //
    function userSign(Request $req){
        $userData=user_date::all();
        $data = $req->input();
        $flag=0;
        foreach($userData as $value){
            if($data['uname']==$value->uname && $data['psw']==$value->psw){
                $flag=1;
            }
        }
        if($flag==1){
        $req->session()->flash('failure','The username already exists');
        return redirect('/');
        }

        $addData = new user_date;
        $addData->uname = $req->uname;
        $addData->psw = $req->psw;
        $addData->save();
        $req->session()->put('user',$data['uname']);
        return redirect('index');
        // echo session('user');
    }
}
