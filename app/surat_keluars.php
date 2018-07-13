<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class surat_keluars extends Model
{
    protected $fillable = ['no_suratk', 'pengirimk', 'perihalk', 'id_instansi', 'alamatk', 'id_disposisi', 'ket_disposisik', 'filek'];

    public function KDisposisi()
    {
    	return $this->belongsTo('App\disposisis', 'id_disposisi');
    }

    public function KInstansi()
    {
    	return $this->belongsTo('App\instansis', 'id_instansi');
    }

    public $timestamps = true;
}
