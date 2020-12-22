<?php

namespace App\Http\Controllers;

use App\Models\KartuKeluarga;
use App\Models\Kewarganegaraan;
use App\Models\LevelPendidikan;
use App\Models\Pekerjaan;
use App\Models\Penduduk;
use Illuminate\Http\Request;

class AnggotaKeluargaController extends Controller
{
    public function create(KartuKeluarga $keluarga){
        $kwns = Kewarganegaraan::all();
        $kerjas = Pekerjaan::all();
        $pendidikans = LevelPendidikan::all();
        $genders = config('central.gender');
        $agama = config('central.agama');
        $status_pernikahan = config('central.status_pernikahan');
        $status_keluarga = config('central.status_keluarga');

        return view('keluarga.anggota.create', compact(
            'kwns',
            'kerjas',
            'genders',
            'pendidikans',
            'keluarga',
            'agama',
            'status_keluarga',
            'status_pernikahan',
        ));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'kerja' => 'required',
            'pendidikan' => 'required',
            'agama' => 'required',
            'status_keluarga' => 'required',
            'status_pernikahan' => 'required',
            'tempat_lahir'=> 'required',
            'tanggal_lahir'=> 'required | date',
            'ayah' => 'required',
            'ibu' => 'required'
        ]);
    }
    public function destroy(KartuKeluarga $keluarga, $id){
        Penduduk::destroy($id);

        return view('keluarga.show', compact('keluarga'));
    }
}
