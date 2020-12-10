<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelajaran extends Model
{
    protected $table='pelajaran';
    protected $guarded=[];

    public function nilai()
    {
        return $this->hasMany(nilai::class,'kd_pelajaran','kd_pelajaran');
    }
}
