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
        Schema::connection('db_dying')->create('tbl_ncp_memo', function (Blueprint $table) {
            $table->integer('id', true);
            $table->enum('jnsdata', ['NCP', 'Memo'])->default('NCP');
            $table->string('nokk', 15);
            $table->string('no_ncp', 25)->nullable();
            $table->string('nokk_ncp', 15);
            $table->string('langganan', 100)->nullable();
            $table->string('buyer', 100)->nullable();
            $table->string('po_number', 100)->nullable();
            $table->string('order', 100)->nullable();
            $table->string('jenis_kain', 100)->nullable();
            $table->string('warna', 100)->nullable();
            $table->string('no_warna', 100)->nullable();
            $table->string('lot', 100)->nullable();
            $table->integer('rol_induk')->nullable();
            $table->decimal('qty_induk', 12)->nullable();
            $table->integer('rol_ncp')->nullable();
            $table->decimal('qty_ncp', 12)->nullable();
            $table->string('tolak_qcf', 100)->nullable();
            $table->date('tgl_celup')->nullable();
            $table->string('mc_celup', 100)->nullable();
            $table->string('acc_keluar', 100)->nullable();
            $table->string('operator', 100)->nullable();
            $table->string('masalah', 100)->nullable();
            $table->string('masalah_dye', 100)->nullable();
            $table->string('tempat_kain', 100)->nullable();
            $table->date('tgl_rencana')->nullable();
            $table->date('tgl_penyelesaian')->nullable();
            $table->string('acc_perbaikan', 100)->nullable();
            $table->string('penyelesaian', 100)->nullable();
            $table->dateTime('tgl_buat')->nullable();
            $table->dateTime('tgl_update')->nullable();
            $table->bigInteger('id_ncp')->index('tbl_ncp_memo_id_ncp_IDX');
            $table->string('no_program', 10)->nullable();
            $table->decimal('press_pump', 6)->nullable();
            $table->decimal('loading', 6)->nullable();
            $table->integer('nozzle')->nullable();
            $table->string('l_r', 10)->nullable();
            $table->decimal('blower', 6)->nullable();
            $table->integer('rpm')->nullable();
            $table->string('plaiter', 10)->nullable();
            $table->integer('cycle_time')->nullable();
            $table->string('po_rajut', 50)->nullable();
            $table->string('no_hanger', 100)->nullable();
            $table->string('shift', 3)->nullable();
            $table->string('analisa_penyebab', 200)->nullable();
            $table->string('ket_penyelesaian', 200)->nullable();
            $table->string('kategori_masalah', 200)->nullable();
            $table->string('acc_perbaikan_dye', 100)->nullable();
            $table->string('perbaikan_dye', 100)->nullable();
            $table->enum('ncp_hitung', ['ya', 'tidak'])->nullable();
            $table->string('kategori_penyelesaian', 100)->nullable();
            $table->integer('jml_perbaikan')->nullable();
            $table->string('akar_masalah', 200)->nullable();
            $table->string('solusi_panjang', 200)->nullable();
            $table->string('nama_mesin', 100)->nullable();
            $table->string('no_ncp_sebelumnya', 100)->nullable();
            $table->string('accperbaikan_sebelumnya', 100)->nullable();
            $table->enum('k_resep', ['0x', '1x', '2x', '3x', '4x', '5x', '6x', '7x', '8x', '9x', '10x', '>5x', '>10x'])->nullable();
            $table->string('kategori_resep', 100)->nullable();
            $table->string('test1_roll', 100)->nullable();
            $table->string('lot_ncp', 100)->nullable();
            $table->string('ket', 200)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('db_dying')->dropIfExists('tbl_ncp_memo');
    }
};
