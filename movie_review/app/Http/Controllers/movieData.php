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
        // echo $count;
    }

    function viewCelebrities(Request $req){
        $count = DB::table('actor')->count();
        $actor = DB::table('actor')->select('act_name','act_img')->get();
        return view('celebrities')->with('actor', $actor)->with('count',$count);
        // echo $count;
    }

    function movieDb(Request $req, $id){
        // echo $id;
        $movie = DB::table('movies')->whereIn('mov_id',[$id])->get();
        $cast = DB::table('movie_cast')->select('act_id')->whereIn('mov_id',[$id])->get();
        $prod_id = DB::table('movies')->select('prod_id')->whereIn('mov_id',[$id])->get();
        $prod = DB::table('production')->whereIn('prod_id',[$prod_id[0]->prod_id])->get();
        $review = DB::table('reviews')->join('customer', 'reviews.cust_id', '=', 'customer.cust_id')->whereIn('mov_id',[$id])->get();
        $count = DB::table('reviews')->join('customer', 'reviews.cust_id', '=', 'customer.cust_id')->whereIn('mov_id',[$id])->count();
        // print_r($review);
        $array = json_decode(json_encode($cast), true);
        $act_id=array();
        $actor=array();
        foreach($array as $value){
            // print_r($value);
            array_push($actor,DB::table('actor')->whereIn('act_id',[$value['act_id']])->get());
        }
        
        return view('moviedata')->with('movie', $movie)->with('actor', $actor)->with('prod', $prod)->with('review',$review)->with('count',$count);
    }

    function feedBack(Request $req){
        $data = $req->input();
        // print_r(session('user'));
        DB::table('feedback')
            ->updateOrInsert(['user' => session('user')],
                            ['impression' => $data['impression'], 'hear' => $data['hear'], 'missing' => $data['missing'], 'recommend' => $data['recommend'], 'useful' => $data['useful'], 'problems' => $data['problems']]
                        );
        $req->session()->flash('message','Your feedback has been successfully submitted');
        return redirect('/feedback');
    }
}
