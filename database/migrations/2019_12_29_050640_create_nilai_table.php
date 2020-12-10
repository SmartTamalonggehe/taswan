<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('NIS',14);
            $table->string('kd_pelajaran',6);
            $table->integer('nilai');
            $table->year('thn');
            $table->string('semester',7);
            $table->timestamps();

            $table->foreign('NIS')->references('NIS')->on('siswa')
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
        Schema::dropIfExists('nilai');
    }
}
