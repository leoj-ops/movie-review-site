<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class dbManager extends Controller
{
    //
    function dbUpdate(Request $req){
        $data = $req->input();
        $prod = DB::table('production')
                    ->where([
                        ['prod_name','=',$data['prod_name']],
                        ['prod_address','=',$data['pro_address']]
                        ])
                    ->exists();
        // print_r($prod);
        if($prod==1){
            $proDb = DB::table('production')->whereIn('prod_name',[$data['prod_name']])->get();
            $array = json_decode(json_encode($proDb), true);
            // DB::table('movies')->insert(['prod_id'=>$array[0]['prod_id']]);
            // echo $array[0]['prod_id'];
        }
        else{
            DB::table('production')->insert(['prod_address'=>$data['pro_address'], 'prod_name'=>$data['prod_name']]);
            $proDb = DB::table('production')->whereIn('prod_name',[$data['prod_name']])->get();
            $array = json_decode(json_encode($proDb), true);
            // DB::table('movies')->insert(['prod_id'=>$array[0]['prod_id']]);
        }
        // print_r($array);
        DB::table('movies')
        ->where('mov_id', $data['mov_id'])
        ->update(['prod_id'=>$array[0]['prod_id']]);

        DB::table('movies')
        ->where('mov_id', $data['mov_id'])
        ->update(['mov_title'=>$data['title'], 'mov_year'=>$data['year'], 'mov_lang'=>$data['lang'], 'mov_len'=>$data['len'], 'mov_desc'=>$data['desc'], 'mov_img'=>$data['img'], 'mov_genre'=>$data['genre'], 'mov_dir'=>$data['dirName'], 'mov_budget'=>$data['bgt'], 'mov_cumulative'=>$data['mov_cumu']]);

        $cast = explode(',',$data['cast']);
        $cast_gender = explode(',',$data['act_gender']);
        $cast_img = explode(',',$data['act_img']);
        $c=0;
        foreach($cast as $act){
            $act_value=DB::table('actor')->where('act_name','=',$act,)->exists();
            if($act_value==1){
                $actDb = DB::table('actor')->whereIn('act_name',[$act])->get();
                $array = json_decode(json_encode($actDb), true);
                // DB::table('movies')->insert(['prod_id'=>$array[0]['prod_id']]);
                // echo $array[0]['prod_id'];
            }
            else{
                DB::table('actor')->insert(['act_name'=>$act, 'act_gender'=> $cast_gender[$c], 'act_img'=>$cast_img[$c]]);
                $actDb = DB::table('actor')->whereIn('act_name',[$act])->get();
                $array = json_decode(json_encode($actDb), true);
                // DB::table('movies')->insert(['prod_id'=>$array[0]['prod_id']]);
            }
            $actId = $array[0]['act_id'];
            // print_r($data['mov_id']);
            DB::table('movie_cast')
            ->where('mov_id', $data['mov_id'])
            ->update(['act_id' => $actId]);
        } 
        $req->session()->flash('message','The data has been updated');
        return redirect('/update');
        // echo "This is update";

    }

    // function dbDisplay(Request $req, $id){
    //     // echo $id;
    //     $movie = DB::table('movies')->whereIn('mov_id',[$id])->get();
    //     $actor = DB::table('actor')->whereIn('act_id',[$id])->get();
    //     $prod = DB::table('production')->whereIn('prod_id',[$id])->get();
    //     return view('display')->with('movie', $movie)->with('actor', $actor)->with('prod', $prod);
    // }

    function dbInsert(Request $req){
        $data = $req->input();
        $prod = DB::table('production')
                    ->where([
                        ['prod_name','=',$data['prod_name']],
                        ['prod_address','=',$data['pro_address']]
                        ])
                    ->exists();
        // print_r($pro);
        if($prod==1){
            $proDb = DB::table('production')->whereIn('prod_name',[$data['prod_name']])->get();
            $array = json_decode(json_encode($proDb), true);
            // DB::table('movies')->insert(['prod_id'=>$array[0]['prod_id']]);
            // echo $array[0]['prod_id'];
        }
        else{
            DB::table('production')->insert(['prod_address'=>$data['pro_address'], 'prod_name'=>$data['prod_name']]);
            $proDb = DB::table('production')->whereIn('prod_name',[$data['prod_name']])->get();
            $array = json_decode(json_encode($proDb), true);
            // DB::table('movies')->insert(['prod_id'=>$array[0]['prod_id']]);
        }

        DB::table('movies')->insert(['mov_title'=>$data['title'], 'mov_year'=>$data['year'], 'mov_lang'=>$data['lang'], 'mov_len'=>$data['len'], 'mov_desc'=>$data['desc'], 'mov_img'=>$data['img'], 'mov_genre'=>$data['genre'], 'prod_id'=>$array[0]['prod_id'], 'mov_dir'=>$data['dirName'], 'mov_budget'=>$data['bgt'], 'mov_cumulative'=>$data['mov_cumu']]);

        $mov = DB::table('movies')->whereIn('mov_title',[$data['title']])->get();
        $movId = json_decode(json_encode($mov), true);
        $cast = explode(',',$data['cast']);
        $cast_gender = explode(',',$data['act_gender']);
        $cast_img = explode('#',$data['act_img']);
        $c=0;
        foreach($cast as $act){
            $act_value=DB::table('actor')->where('act_name','=',$act,)->exists();
            if($act_value==1){
                $actDb = DB::table('actor')->whereIn('act_name',[$act])->get();
                $array = json_decode(json_encode($actDb), true);
                // DB::table('movies')->insert(['prod_id'=>$array[0]['prod_id']]);
                // echo $array[0]['prod_id'];
            }
            else{
                DB::table('actor')->insert(['act_name'=>$act, 'act_gender'=> $cast_gender[$c], 'act_img'=>$cast_img[$c]]);
                $actDb = DB::table('actor')->whereIn('act_name',[$act])->get();
                $array = json_decode(json_encode($actDb), true);
                // DB::table('movies')->insert(['prod_id'=>$array[0]['prod_id']]);
            }
            $actId = $array[0]['act_id'];
            // print_r($movId[0]['mov_id']);
            $c=$c+1;
            DB::table('movie_cast')->insert(['mov_id' => $movId[0]['mov_id'], 'act_id' => $actId]);
        } 
        $req->session()->flash('message','The data has been inserted');
        return redirect('/insert');
    }

    function dbDelete(Request $req){
        // echo "This is delete";
        $data=$req->input();
        DB::table('movie_cast')->where('mov_id', '=', $data['number'])->delete();
        DB::table('movies')->where('mov_id', '=', $data['number'])->delete();
        DB::table('reviews')->where('mov_id', '=', $data['number'])->delete();
        // DB::table('movie_cast')->where('mov_id', '=', $data['number'])->delete();
        $req->session()->flash('message','The data has been deleted');
        return redirect('/delete');
    }

    function dbReview(Request $req){
        $data = $req->input();
        $date=date('Y-m-d');
        // echo empty($data['comment']);
        if(empty($data['comment'])){
            DB::table('reviews')->where('mov_id', '=', $data['rev_btn'])->delete();
            return redirect("/moviedata/{$data['rev_btn']}");
        }
        $customer=DB::table('customer')->where('cust_name','=',session('user'))->exists();
        if($customer==1){
            $cust_id=DB::table('customer')->select('cust_id')->where('cust_name','=',session('user'))->get();
        }
        else{
            DB::table('customer')->insert(['cust_name'=>session('user')]);
            $cust_id=DB::table('customer')->select('cust_id')->where('cust_name','=',session('user'))->get();
        }
        print_r(session('user'));
        print_r($data['rev_btn']);
        // DB::table('reviews')->upsert(['mov_id'=>$data['rev_btn'], 'cust_id'=>$cust_id[0]->cust_id, 'review'=>$data['comment'], 'rev_timestamp'=>$date, 'rev_score'=>$data['rate']], ['mov_id', 'cust_id'], ['review', 'rev_timestamp', 'rev_score']);
        DB::table('reviews')->updateOrInsert(['mov_id'=>$data['rev_btn'], 'cust_id'=>$cust_id[0]->cust_id], ['review'=>$data['comment'], 'rev_timestamp'=>$date, 'rev_score'=>$data['rate']]);
        return redirect("/moviedata/{$data['rev_btn']}");
        // print_r($data);
    }
}
