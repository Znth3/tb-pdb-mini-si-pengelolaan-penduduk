<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KartuKeluarga extends Model
{
    use HasFactory;
    protected $table = 'kartu_keluarga';

    public function penduduks(){
        return $this->hasMany('penduduk');
    }

    public function jorong(){
        return $this->belongsTo('jorong');
    }

    public $timestamps = false;
}
