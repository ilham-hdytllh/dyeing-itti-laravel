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
        Schema::connection('db_dying')->create('tbl_sample', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('nokk', 30)->nullable()->index('nokk');
            $table->string('no_mesin', 50)->nullable();
            $table->string('no_program', 50)->nullable();
            $table->string('roll', 10)->nullable();
            $table->string('standar_', 200)->nullable();
            $table->string('no_resep', 50)->nullable()->index('no_resep');
            $table->string('jam_masuk', 10)->nullable();
            $table->dateTime('tgl_update')->nullable()->index('tgl_update');
            $table->date('tgl_proses')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('db_dying')->dropIfExists('tbl_sample');
    }
};
