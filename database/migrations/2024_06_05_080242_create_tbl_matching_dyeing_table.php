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
        Schema::connection('db_dying')->create('tbl_matching_dyeing', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nokk')->nullable();
            $table->string('nodemand')->nullable();
            $table->string('no_order')->nullable();
            $table->string('shift')->nullable();
            $table->string('gshift')->nullable();
            $table->string('langganan')->nullable();
            $table->string('jenis_kain')->nullable();
            $table->string('no_warna')->nullable();
            $table->string('warna')->nullable();
            $table->string('buyer')->nullable();
            $table->dateTime('jam_terima')->nullable();
            $table->string('acc_matching')->nullable();
            $table->string('operator_penerima')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('pemberi_resep')->nullable();
            $table->string('acc_resep')->nullable();
            $table->string('ok_ke')->nullable();
            $table->string('operator_matcher')->nullable();
            $table->string('note')->nullable();
            $table->dateTime('createdatetime')->nullable();
            $table->dateTime('createdatetime_proses')->nullable();
            $table->string('jenis_prosses', 100)->nullable();
            $table->string('std_waktu_prosses', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('db_dying')->dropIfExists('tbl_matching_dyeing');
    }
};
