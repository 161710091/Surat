<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class surat_masuks extends Model
{
    protected $fillable = ['no_surat', 'tgl_surat', 'pengirim', 'perihal', 'id_disposisi', 'ket_disposisi', 'file'];

    public function MDisposisi()
    {
    	return $this->belongsTo('App\disposisis', 'id_disposisi');
    }

    public $timestamps = true;
}
