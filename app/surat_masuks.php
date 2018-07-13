<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class surat_masuks extends Model
{
    protected $fillable = ['no_suratm', 'id_instansi', 'perihalm', 'id_disposisi', 'ket_disposisim', 'filem'];

    public function MDisposisi()
    {
    	return $this->belongsTo('App\disposisis', 'id_disposisi');
    }

    public function MInstansi()
    {
    	return $this->belongsTo('App\instansis', 'id_instansi');
    }

    public $timestamps = true;
}
