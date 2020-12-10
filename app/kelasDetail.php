<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelasDetail extends Model
{
    protected $table='kelas_det';
    protected $guarded=[];

    public function siswa()
    {
        return $this->belongsTo(siswa::class,'NIS','NIS');
    }
    public function kelas()
    {
        return $this->belongsTo(kelas::class,'kd_kelas','kd_kelas');
    }
}
