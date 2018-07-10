<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class instansis extends Model
{
	protected $table = 'instansis';
    protected $fillable = ['nama_instansi', 'kab_kota', 'telp', 'email', 'alamat', 'kepala', 'nip_kepala'];

    public $timestamps = true;
}
