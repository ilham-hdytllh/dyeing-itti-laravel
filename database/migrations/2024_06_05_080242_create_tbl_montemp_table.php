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
        Schema::connection('db_dying')->create('tbl_montemp', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('id_schedule')->nullable()->unique('id_schedule');
            $table->dateTime('jammasukkain')->nullable();
            $table->string('nokk', 20)->nullable()->index('nokk');
            $table->string('nodemand', 500)->nullable();
            $table->integer('pakai_air')->nullable();
            $table->integer('carry_over')->nullable();
            $table->enum('shift', ['1', '2', '3', ''])->nullable();
            $table->enum('g_shift', ['A', 'B', 'C', ''])->nullable();
            $table->string('operator', 100)->nullable();
            $table->string('colorist', 100)->nullable();
            $table->string('leader', 100)->nullable();
            $table->string('no_program', 20)->nullable();
            $table->string('l_r', 10)->nullable();
            $table->string('l_r_2', 10)->nullable();
            $table->integer('cycle_time')->nullable();
            $table->integer('rpm')->nullable();
            $table->decimal('tekanan', 7)->nullable();
            $table->integer('nozzle')->nullable();
            $table->string('benang')->nullable();
            $table->string('std_cok_wrn')->nullable();
            $table->integer('lebar_a')->nullable();
            $table->integer('gramasi_a')->nullable();
            $table->integer('lebar_s')->nullable();
            $table->integer('gramasi_s')->nullable();
            $table->double('pjng_kain', 12, 2)->nullable();
            $table->double('pjng_kain_perlubang', 12, 2)->nullable();
            $table->string('ket')->nullable();
            $table->enum('status', ['sedang jalan', 'selesai'])->nullable()->default('sedang jalan')->index('status');
            $table->dateTime('tgl_update')->nullable();
            $table->string('rol', 15)->nullable();
            $table->double('bruto', 12, 2)->nullable();
            $table->double('susut_lebar', 12, 2)->nullable();
            $table->double('susut_panjang', 12, 2)->nullable();
            $table->double('speed', 12, 2)->nullable();
            $table->double('vacum', 12, 2)->nullable();
            $table->string('vr1', 10)->nullable();
            $table->string('vr2', 10)->nullable();
            $table->string('vr3', 10)->nullable();
            $table->string('vr4', 10)->nullable();
            $table->string('vr5', 10)->nullable();
            $table->string('vr6', 10)->nullable();
            $table->string('vr7', 10)->nullable();
            $table->string('vr8', 10)->nullable();
            $table->string('vr9', 10)->nullable();
            $table->string('vr10', 10)->nullable();
            $table->string('vr11', 10)->nullable();
            $table->string('vr12', 10)->nullable();
            $table->string('vr13', 10)->nullable();
            $table->string('vr14', 10)->nullable();
            $table->string('vr15', 10)->nullable();
            $table->string('ch1', 10)->nullable();
            $table->string('ch2', 10)->nullable();
            $table->string('ch3', 10)->nullable();
            $table->string('ch4', 10)->nullable();
            $table->string('ch5', 10)->nullable();
            $table->string('ch6', 10)->nullable();
            $table->integer('lb1')->nullable();
            $table->integer('lb2')->nullable();
            $table->integer('lb3')->nullable();
            $table->integer('lb4')->nullable();
            $table->integer('lb5')->nullable();
            $table->integer('lb6')->nullable();
            $table->integer('lb7')->nullable();
            $table->integer('lb8')->nullable();
            $table->string('sc1', 10)->nullable();
            $table->string('sc2', 10)->nullable();
            $table->string('sc3', 10)->nullable();
            $table->string('sc4', 10)->nullable();
            $table->string('sk', 10)->nullable();
            $table->string('stm', 10)->nullable();
            $table->string('ws_abc', 10)->nullable();
            $table->string('ws', 10)->nullable();
            $table->enum('plaiter', ['-', '1', '2', '3', '4'])->nullable();
            $table->decimal('blower', 5)->nullable();
            $table->decimal('air_awal', 12)->nullable();
            $table->decimal('waktu_tunggu', 5)->nullable();
            $table->string('note_wt', 100)->nullable();
            $table->string('oper_shift', 250)->nullable();
            $table->string('lotlgcy', 100)->nullable();
            $table->integer('lebar_fin')->nullable();
            $table->integer('grm_fin')->nullable();
            $table->integer('lebar_dye')->nullable();
            $table->integer('grm_dye')->nullable();
            $table->enum('masukkain', ['satu kepala', 'dua kepala'])->nullable();
            $table->string('gabung_celup', 100)->nullable();
            $table->dateTime('tgl_buat')->nullable();
            $table->string('loterp', 100)->nullable();
            $table->string('demanderp', 100)->nullable();
            $table->string('nokk_legacy', 100)->nullable();
            $table->string('kategori_resep')->nullable();
            $table->string('kasih_resep')->nullable();
            $table->string('acc_resep')->nullable();
            $table->string('absen_in')->nullable();
            $table->string('tgl_in')->nullable();
            $table->string('absen_out')->nullable();
            $table->string('tgl_out')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('archive')->nullable();
            $table->dateTime('creationdatetime')->nullable();
            $table->string('ket_stopmesin', 500)->nullable();
            $table->string('ket_stopmesin2', 500)->nullable();
            $table->string('ket_stopmesin3', 500)->nullable();
            $table->string('ket_stopmesin4', 500)->nullable();
            $table->dateTime('tgl_stop')->nullable()->index('tgl_stop');
            $table->dateTime('tgl_stop2')->nullable();
            $table->dateTime('tgl_stop3')->nullable();
            $table->dateTime('tgl_stop4')->nullable();
            $table->dateTime('tgl_mulai')->nullable()->index('tgl_mulai');
            $table->dateTime('tgl_mulai2')->nullable();
            $table->dateTime('tgl_mulai3')->nullable();
            $table->dateTime('tgl_mulai4')->nullable();
            $table->dateTime('tgl_target')->nullable()->index('tgl_target');
            $table->string('sisa_waktu', 5)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('db_dying')->dropIfExists('tbl_montemp');
    }
};
