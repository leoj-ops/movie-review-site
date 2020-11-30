<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class movieData extends Controller
{
    //
    function viewMovies(Request $req){
        $count = DB::table('movies')->count();
        $movie = DB::table('movies')->select('mov_id','mov_title','mov_img')->get();
        return view('movies')->with('movie', $movie)->with('count',$count);
        echo $count;
    }
}
