<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class dbManager extends Controller
{
    //
    function dbUpdate(Request $req){
        // echo "This is update";

    }

    function dbDisplay(Request $req){
        // echo "This is Display";
    }

    function dbInsert(Request $req){
        $data = $req->input();
        DB::table('movies')->insert(['mov_title'=>$data['title'], 'mov_year'=>$data['year'], 'mov_lang'=>$data['lang'], 'mov_len'=>$data['len'], 'mov_desc'=>$data['desc'], 'mov_img'=>$data['img'], 'mov_genre'=>$data['genre']]);
        
        // echo ;
    }

    function dbDelete(Request $req){
        // echo "This is delete";

    }
}
