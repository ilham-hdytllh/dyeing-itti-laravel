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
        Schema::connection('db_dying')->create('tbl_spectro', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('nokk', 15)->index('tbl_spectro_nokk_IDX');
            $table->string('langganan', 100)->nullable();
            $table->string('no_order', 30)->nullable();
            $table->string('buyer', 100)->nullable();
            $table->string('no_item', 20)->nullable();
            $table->string('no_hanger', 20)->nullable();
            $table->string('jenis_kain', 200)->nullable();
            $table->float('lebar', 5)->nullable();
            $table->float('gramasi', 6)->nullable();
            $table->string('warna', 100)->nullable();
            $table->string('no_warna', 100)->nullable();
            $table->string('no_lot', 100)->nullable();
            $table->double('qty_order', 12, 2)->nullable();
            $table->string('rcode', 100)->nullable();
            $table->string('no_mc', 100)->nullable();
            $table->string('l_r', 100)->nullable();
            $table->double('loading', 12, 2)->nullable();
            $table->integer('kapasitas')->nullable();
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
        Schema::connection('db_dying')->dropIfExists('tbl_spectro');
    }
};
