<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    protected $table='jadwal';
    protected $guarded=[];

    public function guru()
    {
        return $this->belongsTo(guru::class,'NIP','NIP');
    }
    public function pelajaran()
    {
        return $this->belongsTo(pelajaran::class,'kd_pelajaran','kd_pelajaran');
    }
}
