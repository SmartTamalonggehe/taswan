<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kd_jadwal',20);
            $table->string('NIP',18);
            $table->string('kd_pelajaran',6);
            $table->string('tema');
            $table->string('hari',7);
            $table->time('jam_masuk');
            $table->time('jam_seles');
            $table->year('thn');
            $table->string('semester',7);
            $table->timestamps();

            $table->foreign('NIP')->references('NIP')->on('guru')
                    ->onUpdate('CASCADE')
                    ->onDelete('CASCADE');
            $table->foreign('kd_pelajaran')->references('kd_pelajaran')->on('pelajaran')
                    ->onUpdate('CASCADE')
                    ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal');
    }
}
