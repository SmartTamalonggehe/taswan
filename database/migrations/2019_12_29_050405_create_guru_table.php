<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('NIP',18)->unique();
            $table->string('nm_guru',100);
            $table->string('jenkel',11);
            $table->string('tempat',80);
            $table->date('tgl_lahir');
            $table->string('kd_gol',4);
            $table->string('kd_jabatan',4);
            $table->string('kd_mk_gol',5);
            $table->string('pend_terakhir',60);
            $table->date('tgl_dinas');
            $table->string('agama',18);
            $table->timestamps();

            $table->foreign('kd_gol')->references('kd_gol')->on('golongan')
                    ->onUpdate('CASCADE')
                    ->onDelete('CASCADE');
            $table->foreign('kd_jabatan')->references('kd_jabatan')->on('jabatan')
                    ->onUpdate('CASCADE')
                    ->onDelete('CASCADE');
            $table->foreign('kd_mk_gol')->references('kd_mk_gol')->on('mk_gol')
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
        Schema::dropIfExists('guru');
    }
}
