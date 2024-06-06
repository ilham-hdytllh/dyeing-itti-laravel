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
        Schema::connection('db_dying')->create('tbl_hasilcelup', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('id_montemp')->nullable()->unique('id_montemp');
            $table->string('nokk', 20)->nullable()->index('nokk');
            $table->string('nodemand', 1000)->nullable();
            $table->string('lama_proses', 5)->nullable();
            $table->enum('status', ['OK', 'Gagal Proses', 'Levelling-Matching', 'Pelunturan-Matching', 'Celup Poly Dulu-Matching', 'Scouring Turun', 'Continuous - Bleaching', 'Relaxing - Priset', 'Tunggu Review'])->nullable();
            $table->enum('shift', ['1', '2', '3'])->nullable();
            $table->enum('g_shift', ['A', 'B', 'C'])->nullable()->index('g_shift');
            $table->string('ph_cb', 4)->nullable();
            $table->string('suhu_cb', 4)->nullable();
            $table->string('ph_poly', 4)->nullable();
            $table->string('suhu_poly', 4)->nullable();
            $table->string('ph_cott', 4)->nullable();
            $table->string('suhu_cott', 4)->nullable();
            $table->string('berat_jns', 4)->nullable();
            $table->string('ph_naco', 4)->nullable();
            $table->string('a_panas', 20)->nullable();
            $table->string('a_dingin', 20)->nullable();
            $table->integer('point')->nullable();
            $table->string('proses_point', 60)->nullable();
            $table->enum('k_resep', ['0x', '1x', '2x', '3x', '4x', '5x', '6x', '7x', '>5x'])->nullable();
            $table->enum('jml_topping', ['0x', '1x', '2x', '3x', '4x', '5x', '6x', '7x', '8x', '9x', '10x'])->nullable();
            $table->string('analisa')->nullable();
            $table->string('operator_keluar', 100)->nullable();
            $table->string('acc_keluar', 100)->nullable();
            $table->string('tambah_obat', 100)->nullable();
            $table->string('tambah_obat1', 100)->nullable();
            $table->string('tambah_obat2', 100)->nullable();
            $table->string('tambah_obat3', 100)->nullable();
            $table->string('tambah_obat4', 100)->nullable();
            $table->string('tambah_obat5', 100)->nullable();
            $table->string('tambah_obat6', 100)->nullable();
            $table->string('operator_potong', 100)->nullable();
            $table->enum('kd_stop', ['LM', 'KM', 'PT', 'KO', 'AP', 'PA', 'PM', 'GT', 'TG', 'OK'])->nullable();
            $table->dateTime('mulai_stop')->nullable();
            $table->dateTime('selesai_stop')->nullable();
            $table->string('proses', 50)->nullable();
            $table->string('ket')->nullable();
            $table->string('rcode', 12)->nullable()->index('rcode');
            $table->decimal('air_akhir', 12)->nullable();
            $table->char('gerobak', 10)->nullable();
            $table->string('jns_gerobak', 35)->nullable();
            $table->string('analisa_topping', 100)->nullable();
            $table->string('no_resep', 20)->nullable();
            $table->string('no_resep2', 20)->nullable();
            $table->enum('kategori_warna', ['Light', 'Dark', 'Medium', 'White'])->nullable();
            $table->enum('resep', ['Baru', 'Lama', 'Setting'])->nullable();
            $table->dateTime('tgl_buat')->nullable()->index('tgl_buat');
            $table->dateTime('tgl_update')->nullable();
            $table->string('analisa_resep', 1000)->nullable();
            $table->string('status_resep')->nullable();
            $table->string('tambah_dyestuff')->nullable();
            $table->string('arah_warna')->nullable();
            $table->string('status_warna')->nullable();
            $table->string('leader')->nullable();
            $table->string('point2')->nullable();

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
        Schema::connection('db_dying')->dropIfExists('tbl_hasilcelup');
    }
};
