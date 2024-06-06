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
        Schema::connection('db_dying')->create('tbl_setting_mesin', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('nokk', 20)->nullable();
            $table->string('langganan', 100)->nullable();
            $table->string('buyer', 100)->nullable();
            $table->string('no_order', 50)->nullable();
            $table->string('po', 200)->nullable();
            $table->string('no_hanger', 50)->nullable();
            $table->string('no_item', 50)->nullable();
            $table->string('jenis_kain', 200)->nullable();
            $table->date('tgl_delivery')->nullable();
            $table->integer('lebar')->nullable();
            $table->integer('gramasi')->nullable();
            $table->string('warna', 200)->nullable();
            $table->string('no_warna', 100)->nullable();
            $table->double('qty_order', 12, 2)->nullable();
            $table->double('pnjg_order', 12, 2)->nullable();
            $table->enum('satuan_order', ['Yard', 'Meter', 'PCS'])->nullable();
            $table->string('lot', 20)->nullable();
            $table->integer('rol')->nullable();
            $table->double('bruto', 12, 2)->nullable();
            $table->double('pjng_kain', 12, 2)->nullable();
            $table->string('kapasitas', 20)->nullable();
            $table->string('no_mc', 10)->nullable();
            $table->decimal('loading', 5)->nullable();
            $table->string('prod_order', 20)->nullable();
            $table->string('prod_demand', 20)->nullable();
            $table->string('no_program', 20)->nullable();
            $table->string('l_r', 10)->nullable();
            $table->string('l_r_poly', 10)->nullable();
            $table->integer('cycle_time')->nullable();
            $table->enum('masukkain', ['satu kepala', 'dua kepala'])->nullable();
            $table->integer('rpm')->nullable();
            $table->decimal('tekanan', 7)->nullable();
            $table->decimal('tekanan_poly', 7)->nullable();
            $table->integer('nozzle')->nullable();
            $table->integer('nozzle_poly')->nullable();
            $table->decimal('blower', 5)->nullable();
            $table->decimal('blower_poly', 5)->nullable();
            $table->enum('plaiter', ['-', '1', '2', '3', '4'])->nullable();
            $table->enum('jumlah_test', ['-', '1', '2', '3', '4', '5'])->nullable();
            $table->text('catatan')->nullable();
            $table->string('alur_proses', 200)->nullable();
            $table->string('file_gambar', 200)->nullable();
            $table->dateTime('tgl_buat')->nullable();
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
        Schema::connection('db_dying')->dropIfExists('tbl_setting_mesin');
    }
};
