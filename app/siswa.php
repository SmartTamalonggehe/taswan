<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $table='siswa';
    protected $guarded=[];

    public function nilai()
    {
        return $this->hasMany(nilai::class,'NIS','NIS');
    }
}
