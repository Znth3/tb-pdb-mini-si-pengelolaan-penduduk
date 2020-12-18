<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;
    protected $table = 'penduduk';

    public function keluarga(){
        return $this->belongsTo(KartuKeluarga::class, 'keluarga_id', 'id');
    }

    public function levelPendidikan(){
        return $this->belongsTo(LevelPendidikan::class);
    }

    public function kewarganegaraan(){
        return $this->belongsTo(Kewarganegaraan::class);
    }

    public function pekerjaan(){
        return $this->belongsTo(Pekerjaan::class);
    }

    public $timestamps = false;
}
