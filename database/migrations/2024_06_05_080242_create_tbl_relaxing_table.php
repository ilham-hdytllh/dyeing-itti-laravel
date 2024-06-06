<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('db_dying')->create('tbl_relaxing', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('nokk', 30);
            $table->string('no_program', 50)->nullable();
            $table->float('s_in', 11, 0)->nullable();
            $table->float('s_out', 11, 0)->nullable();
            $table->string('jam_masuk', 10)->nullable();
            $table->string('standar_', 200)->nullable();
            $table->string('no_resep', 50)->nullable();
            $table->date('tgl_proses')->nullable();
            $table->integer('roll')->nullable();
            $table->integer('l_in')->nullable();
            $table->integer('l_out')->nullable();
            $table->double('g_in', 11, 2)->nullable();
            $table->double('g_out', 11, 2)->nullable();
            $table->double('l_susut', 11, 2)->nullable();
            $table->double('g_susut', 11, 2)->nullable();
            $table->double('suhu1', 11, 2)->nullable();
            $table->double('suhu2', 11, 2)->nullable();
            $table->double('suhu3', 11, 2)->nullable();
            $table->double('suhu4', 11, 2)->nullable();
            $table->double('suhu5', 11, 2)->nullable();
            $table->double('suhu6', 11, 2)->nullable();
            $table->double('speed1', 11, 2)->nullable();
            $table->double('speed2', 11, 2)->nullable();
            $table->double('speed3', 11, 2)->nullable();
            $table->double('speed4', 11, 2)->nullable();
            $table->double('speed5', 11, 2)->nullable();
            $table->double('speed6', 11, 2)->nullable();
            $table->string('catatan', 200)->nullable();
            $table->dateTime('tgl_update')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('db_dying')->dropIfExists('tbl_relaxing');
    }
};
