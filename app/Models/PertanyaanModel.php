<?php

namespace App\Models;

use Illuminate\support\Facades\DB;

class PertanyaanModel 
{
    public static function get_all(){
        $items = DB::table('pertanyaans')->get();
     
        return $items;
    }
}
