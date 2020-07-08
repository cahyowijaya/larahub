<?php

namespace App\Models;

use Illuminate\support\Facades\DB;

class PertanyaanModel 
{
    public static function get_all(){
        $items = DB::table('pertanyaans')->get();
     
        return $items;
    }

    public static function save($data){
        $new_items = DB::table('pertanyaans')->insert($data);

        return $new_items;
    }
}
