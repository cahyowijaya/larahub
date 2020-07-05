<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function index(){
        $pertanyaans = PertanyaanModel::get_all();
        // dd($pertanyaans);
        return view('index',compact('pertanyaans'));
    }

    public function create(){
        return view('create');
    }
}
