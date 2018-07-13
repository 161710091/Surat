<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class instansis extends Model
{
	protected $table = 'instansis';
    protected $fillable = ['nama_instansi', 'kab_kota', 'telp', 'email', 'alamat', 'kepala', 'nip_kepala'];

    public function Surat_Masuk()
    {
    	return $this->hasMany('App\surat_masuks', 'id_instansi');
    }

    public function Surat_Keluar()
    {
    	return $this->hasMany('App\surat_keluars', 'id_instansi');
    }

    public $timestamps = true;
}
