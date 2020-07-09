<?php

namespace App\Models;

use Illuminate\support\Facades\DB;

class JawabanModel
{
    public static function find_by_pertanyaan_id($data){
        $items = DB::table('jawabans')->where('pertanyaan_id',$data)->get();

        return $items;
    }

    public static function save($data){
        $new_items = DB::table('jawabans')->insert($data);

        return $new_items;
    }
}
