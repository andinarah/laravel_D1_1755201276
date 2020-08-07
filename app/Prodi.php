<?php

namespace App;

use illuminate\Database\Eloquent\Model;

class prodi extends Model
{
    protected $table = 'prodi';
    protected $primarykey = 'kode_prodi';

    public function mahasiswa()
    {
        return $this->belongsTo('App\Mahasiswa','prodi','kode_prodi');
    }
}