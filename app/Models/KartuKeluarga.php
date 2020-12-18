<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KartuKeluarga extends Model
{
    use HasFactory;
    protected $table = 'kartu_keluarga';

    public function penduduks(){
        return $this->hasMany(Penduduk::class);
    }

    public function jorong(){
        return $this->belongsTo(Jorong::class);
    }

    public $timestamps = false;
}
