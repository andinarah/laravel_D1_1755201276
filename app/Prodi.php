<?php

namespace App;

use illuminate\Database\Eloquent\Model;

class prodi extends Model
{
    protected $table = 'prodi';
    protected $primaryKey = 'kode_prodi';

    protected $fillable = ['kode_prodi','nama_prodi','kaprodi'];

    public function mahasiswa()
    {
        return $this->belongsTo('App\Mahasiswa','prodi','kode_prodi');
    }
}