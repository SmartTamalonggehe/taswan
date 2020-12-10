<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMkGolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mk_gol', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kd_mk_gol',5)->unique();
            $table->integer('thn');
            $table->integer('bln');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mk_gol');
    }
}
