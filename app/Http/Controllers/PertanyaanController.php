<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function index(){
        $pertanyaans = PertanyaanModel::get_all();
        // dd($pertanyaans);
        return view('pertanyaan.index',compact('pertanyaans'));
    }

    public function create(){
        // dd('tes');
        return view('pertanyaan.create');
    }

    public function store(Request $request){
        $data = $request->all();
        // dd($data);
        unset($data["_token"]);
        PertanyaanModel::save($data);

        return redirect('/pertanyaan');       
    }

    public function edit(){

    }

    public function update(){

    }
}
