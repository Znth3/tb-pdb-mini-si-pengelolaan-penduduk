<?php

namespace App\Http\Controllers;

use App\Models\KartuKeluarga;
use App\Models\Penduduk;
use Illuminate\Http\Request;

class KartuKeluargaController extends Controller
{
    public function index(){
        $keluarga = KartuKeluarga::with('jorong.nagari')->withCount('penduduks')->paginate(15);

        return view('keluarga.index', compact('keluarga'));
    }

    public function show(KartuKeluarga $keluarga){
        $penduduks = Penduduk::with('keluarga')
            ->where('keluarga_id', $keluarga->id)->get();

        return view('keluarga.show', compact('keluarga', 'penduduks'));
    }

    public function create(){}

    public function store(Request $request){

    }



    public function edit(){

    }

}
