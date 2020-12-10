<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    protected $table='guru';
    protected $guarded=[];

    public function golongan()
    {
        return $this->belongsTo(golongan::class,'kd_gol','kd_gol');
    }
    public function jabatan()
    {
        return $this->belongsTo(jabatan::class,'kd_jabatan','kd_jabatan');
    }
    public function mkGol()
    {
        return $this->belongsTo(mkGol::class,'kd_mk_gol','kd_mk_gol');
    }
}
