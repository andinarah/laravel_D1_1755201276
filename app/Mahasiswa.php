<?php

namespace App;

use illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';

    //field yang diisi
    protected $fillable = ['nim','nama_lengkap','prodi','alamat'];

    //field yang diabaikan
    protected $guarded = [];

    public function mprodi()
    {
        return $this->hasOne('App\Prodi','kode_prodi','prodi');
    }
}