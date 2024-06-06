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
        Schema::connection('db_dying')->create('tbl_stopmesin', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('no_stop', 20)->nullable();
            $table->enum('shift', ['1', '2', '3'])->nullable();
            $table->enum('g_shift', ['A', 'B', 'C'])->nullable();
            $table->integer('kapasitas')->nullable();
            $table->string('no_mesin', 10)->nullable();
            $table->string('proses', 50)->nullable();
            $table->enum('kd_stopmc', ['LM', 'KM', 'PT', 'KO', 'AP', 'PA', 'PM', 'GT', 'TG', 'OK'])->nullable();
            $table->dateTime('mulai')->nullable();
            $table->dateTime('selesai')->nullable();
            $table->string('keterangan')->nullable();
            $table->date('tgl_buat')->nullable();
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
        Schema::connection('db_dying')->dropIfExists('tbl_stopmesin');
    }
};
