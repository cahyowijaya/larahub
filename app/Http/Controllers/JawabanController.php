<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;

class JawabanController extends Controller
{   

    public function index($pertanyaan_id){
        $jawabans = JawabanModel::find_by_pertanyaan_id($pertanyaan_id);
        // dd($jawabans);

        return view('jawaban.index',compact('jawabans'));
    }

    public function store($pertanyaan_id, Request $requset){
        // dd('test');
        $data = $requset->all();
        unset($data["_token"]);
        JawabanModel::save($data);
        // dd($data);

        return redirect('pertanyaan');  
    }
}
