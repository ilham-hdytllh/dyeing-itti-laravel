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
        Schema::connection('db_dying')->create('tbl_datatest', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('nokk', 20)->nullable();
            $table->string('no_test', 20)->nullable();
            $table->string('langganan', 150)->nullable();
            $table->string('buyer', 150)->nullable();
            $table->string('no_order', 50)->nullable();
            $table->string('po', 150)->nullable();
            $table->string('no_hanger', 30)->nullable();
            $table->string('no_item', 30)->nullable();
            $table->string('jenis_kain', 200)->nullable();
            $table->string('warna', 200)->nullable();
            $table->string('no_warna', 150)->nullable();
            $table->enum('shift', ['1', '2', '3'])->nullable();
            $table->enum('g_shift', ['A', 'B', 'C'])->nullable();
            $table->string('lot', 10)->nullable();
            $table->integer('lebar')->nullable();
            $table->integer('gramasi')->nullable();
            $table->string('t_jawab', 50)->nullable();
            $table->integer('roll')->nullable();
            $table->double('bruto', 12, 2)->nullable();
            $table->text('ket')->nullable();
            $table->string('no_mesin', 20)->nullable();
            $table->string('masalah')->nullable();
            $table->string('improve')->nullable();
            $table->decimal('loading', 5)->nullable();
            $table->string('l_r', 10)->nullable();
            $table->string('no_program', 20)->nullable();
            $table->string('demand_erp', 20)->nullable();
            $table->string('prodorder_erp', 20)->nullable();
            $table->integer('rpm')->nullable();
            $table->integer('cycle_time')->nullable();
            $table->decimal('tekanan', 7)->nullable();
            $table->integer('nozzle')->nullable();
            $table->decimal('blower', 5)->nullable();
            $table->enum('plaiter', ['-', '1', '2', '3', '4'])->nullable();
            $table->string('file_grafik', 200)->nullable();
            $table->text('ket_proses')->nullable();
            $table->text('hasil_qc')->nullable();
            $table->text('cek_shading')->nullable();
            $table->string('file_inspek', 200)->nullable();
            $table->text('update_status')->nullable();
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
        Schema::connection('db_dying')->dropIfExists('tbl_datatest');
    }
};
