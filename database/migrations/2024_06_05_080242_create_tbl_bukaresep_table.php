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
        Schema::connection('db_dying')->create('tbl_bukaresep', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nokk')->nullable();
            $table->string('nodemand')->nullable();
            $table->string('no_order')->nullable();
            $table->string('langganan')->nullable();
            $table->string('jenis_kain')->nullable();
            $table->string('no_warna')->nullable();
            $table->string('warna')->nullable();
            $table->string('buyer')->nullable();
            $table->string('shift')->nullable();
            $table->string('gshift')->nullable();
            $table->string('noresep1')->nullable();
            $table->string('suffix1')->nullable();
            $table->string('noresep2')->nullable();
            $table->string('suffix2')->nullable();
            $table->string('resep')->nullable();
            $table->string('ket')->nullable();
            $table->string('cek_resep')->nullable();
            $table->string('ket_resep')->nullable();
            $table->string('diperiksa_oleh')->nullable();
            $table->string('personil')->nullable();
            $table->dateTime('createdatetime')->nullable();
            $table->dateTime('start')->nullable();
            $table->dateTime('stop')->nullable();
            $table->string('jml_gerobak')->nullable();
            $table->string('proses')->nullable();
            $table->integer('kapasitas')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('db_dying')->dropIfExists('tbl_bukaresep');
    }
};
