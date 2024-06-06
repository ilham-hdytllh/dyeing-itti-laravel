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
        Schema::connection('db_dying')->create('tbl_potongcelup', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('id_hasilcelup')->nullable()->unique('id_hasilcelup');
            $table->string('nokk', 20)->nullable()->index('nokk');
            $table->string('nodemand', 20)->nullable();
            $table->string('comment_warna')->nullable();
            $table->string('acc', 30)->nullable();
            $table->text('ket')->nullable();
            $table->string('disposisi', 30)->nullable();
            $table->string('operator', 30)->nullable();
            $table->enum('shift', ['1', '2', '3'])->nullable();
            $table->enum('g_shift', ['A', 'B', 'C'])->nullable();
            $table->dateTime('tgl_buat')->nullable();
            $table->dateTime('tgl_update')->nullable();

            $table->index(['nokk'], 'nokk1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('db_dying')->dropIfExists('tbl_potongcelup');
    }
};
