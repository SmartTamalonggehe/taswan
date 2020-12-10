<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelasDetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas_det', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('NIS',14);
            $table->string('kd_kelas',5);
            $table->year('thn');
            $table->string('semester',7);
            $table->timestamps();


            $table->foreign('kd_kelas')->references('kd_kelas')->on('kelas')
                    ->onUpdate('CASCADE')
                    ->onDelete('CASCADE');
            $table->foreign('NIS')->references('NIS')->on('siswa')
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
        Schema::dropIfExists('kelas_det');
    }
}
