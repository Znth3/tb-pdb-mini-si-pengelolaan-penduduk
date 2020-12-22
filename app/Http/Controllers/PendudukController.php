<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function destroy(Penduduk $penduduk){
        $penduduk->delete();
    }

}
