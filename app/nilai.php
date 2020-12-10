<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nilai extends Model
{
    protected $table='nilai';
    protected $guarded=[];

    public function siswa()
    {
        return $this->belongsTo(siswa::class,'NIS','NIS');
    }
    public function pelajaran()
    {
        return $this->belongsTo(pelajaran::class,'kd_pelajaran','kd_pelajaran');
    }
}
