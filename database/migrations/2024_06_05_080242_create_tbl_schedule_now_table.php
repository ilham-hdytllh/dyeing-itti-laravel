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
        Schema::connection('db_dying')->create('tbl_schedule_now', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('nokk', 20)->nullable()->index('nokk');
            $table->string('nodemand', 20)->nullable();
            $table->integer('kapasitas')->nullable()->index('kapasitas');
            $table->decimal('loading', 5)->nullable();
            $table->string('no_mesin', 10)->nullable()->index('no_mesin');
            $table->string('mc_from', 10)->nullable();
            $table->enum('no_urut', ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'])->index('no_urut');
            $table->integer('no_sch')->nullable();
            $table->string('no_resep', 20)->nullable();
            $table->string('no_resep2', 20)->nullable();
            $table->enum('resep', ['Baru', 'Lama'])->nullable();
            $table->enum('kategori_warna', ['Light', 'Dark', 'Medium', 'White'])->nullable();
            $table->string('proses', 50)->nullable()->index('proses');
            $table->string('energi', 10)->nullable();
            $table->enum('dyestuff', ['D', 'R', 'D+R', 'OBA'])->nullable();
            $table->date('tgl_masuk')->nullable();
            $table->string('personil', 50)->nullable();
            $table->string('acc_staff', 50)->nullable();
            $table->enum('ket_status', ['Tolak Basah', 'Mini Bulk', 'MC Stop', 'Service MC', 'MC Rusak', 'Test Proses', 'Test Obat', 'Test Mesin', 'Kain Basah', 'Greige', 'Perbaikan', 'Gagal Proses', 'Cuci YD', 'Development Sample', 'Salesmen Sample', 'Cuci Mesin', 'Greige Delay', 'Cuci Misty', 'Scouring-Preset', 'First Lot', 'Relaxing-Preset'])->nullable();
            $table->string('langganan', 150)->nullable();
            $table->string('buyer', 150)->nullable();
            $table->string('no_order', 50)->nullable();
            $table->string('po', 150)->nullable();
            $table->string('no_hanger', 30)->nullable();
            $table->string('no_item', 30)->nullable();
            $table->string('jenis_kain')->nullable();
            $table->date('tgl_delivery')->nullable();
            $table->integer('lebar')->nullable();
            $table->integer('gramasi')->nullable();
            $table->string('warna', 150)->nullable();
            $table->string('no_warna', 150)->nullable();
            $table->double('qty_order', 12, 2)->nullable();
            $table->double('pjng_order', 12, 2)->nullable();
            $table->enum('satuan_order', ['Yard', 'Meter', 'PCS'])->nullable();
            $table->string('lot', 10)->nullable();
            $table->integer('rol')->nullable();
            $table->double('bruto', 12, 2)->nullable();
            $table->string('no_rajut', 20)->nullable();
            $table->enum('shift', ['1', '2', '3'])->nullable();
            $table->enum('g_shift', ['A', 'B', 'C', ''])->nullable();
            $table->enum('status', ['antri mesin', 'sedang jalan', 'selesai'])->default('antri mesin')->index('status');
            $table->string('operation', 10)->nullable();
            $table->decimal('target', 3, 1)->nullable();
            $table->integer('revisi')->nullable()->default(0);
            $table->enum('ket_kain', ['Sudah Buka Kain', 'Belum Buka Kain', 'Kain Basah', 'Kain Kering', 'Sudah Jahit Pinggir', 'Pindah Dari Mesin', 'Kain Sudah Preset', 'Ex White', 'Ex Scouring', 'Ex Warna Tua', 'Ex Warna Muda', 'Ex Cuci Mesin', 'Sudah Dokumen', 'Urgent', 'Test Kestabilan'])->nullable();
            $table->enum('kk_kestabilan', ['0', '1'])->nullable()->default('0');
            $table->enum('kk_normal', ['0', '1'])->nullable()->default('0');
            $table->dateTime('tgl_mulai')->nullable();
            $table->dateTime('tgl_stop')->nullable();
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
        Schema::connection('db_dying')->dropIfExists('tbl_schedule_now');
    }
};
