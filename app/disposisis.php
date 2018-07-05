<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class disposisis extends Model
{
    protected $fillable = ['disposisi'];

    public function Surat_Masuk()
    {
    	return $this->hasMany('App\surat_masuks', 'id_disposisi');
    }

    public function Surat_Keluar()
    {
    	return $this->hasMany('App\surat_keluars', 'id_disposisi');
    }

    public $timestamps = true;
}
