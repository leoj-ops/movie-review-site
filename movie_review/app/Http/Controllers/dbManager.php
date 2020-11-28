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
        foreach($cast as $act){
            $act_value=DB::table('actor')->where('act_name','=',$act,)->exists();
            if($act_value==1){
                $actDb = DB::table('actor')->whereIn('act_name',[$act])->get();
                $array = json_decode(json_encode($actDb), true);
                // DB::table('movies')->insert(['prod_id'=>$array[0]['prod_id']]);
                // echo $array[0]['prod_id'];
            }
            else{
                DB::table('actor')->insert(['act_name'=>$act, 'act_gender'=>$data['act_gender'], 'act_img'=>$data['act_img']]);
                $actDb = DB::table('actor')->whereIn('act_name',[$act])->get();
                $array = json_decode(json_encode($actDb), true);
                // DB::table('movies')->insert(['prod_id'=>$array[0]['prod_id']]);
            }
            $actId = $array[0]['act_id'];
            print_r($movId[0]['mov_id']);
            DB::table('movie_cast')->insert(['mov_id' => $movId[0]['mov_id'], 'act_id' => $actId]);
        } 
        return redirect('display');
    }

    function dbDelete(Request $req){
        // echo "This is delete";

    }
}
