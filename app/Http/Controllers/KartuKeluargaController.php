<?php

namespace App\Http\Controllers;

use App\Models\KartuKeluarga;
use Illuminate\Http\Request;

class KartuKeluargaController extends Controller
{
    public function index(){
        $keluarga = KartuKeluarga::paginate(15);

        return view('keluarga.index', compact('keluarga'));
    }

}
