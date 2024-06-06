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
        Schema::connection('db_dying')->create('tbl_monitoring', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('id_sample')->nullable();
            $table->string('l_r', 10)->nullable();
            $table->double('c_time', 12, 0)->nullable();
            $table->double('tekanan', 12, 1)->nullable();
            $table->double('rpm', 12, 0)->nullable();
            $table->double('p_air', 12, 0)->nullable();
            $table->string('a_panas', 30)->nullable();
            $table->string('a_dingin', 30)->nullable();
            $table->string('nokk', 20)->nullable()->index('nokk');
            $table->double('qty', 12, 2)->nullable();
            $table->string('lot', 50)->nullable();
            $table->string('langganan', 200)->nullable();
            $table->string('no_order', 100)->nullable();
            $table->string('no_hanger', 30)->nullable();
            $table->string('jenis_kain', 200)->nullable();
            $table->string('no_warna', 200)->nullable();
            $table->string('warna', 200)->nullable();
            $table->string('no_resep', 50)->nullable()->index('no_resep');
            $table->double('nozzle', 12, 0)->nullable();
            $table->integer('a_lebar')->nullable();
            $table->integer('a_gramasi')->nullable();
            $table->integer('p_gramasi')->nullable();
            $table->integer('p_lebar')->nullable();
            $table->double('brt_jenis', 12, 3)->nullable();
            $table->string('ph', 30)->nullable();
            $table->string('ph1', 30)->nullable();
            $table->string('c_over', 10)->nullable();
            $table->double('p_kain', 12, 2)->nullable();
            $table->double('loading', 12, 2)->nullable();
            $table->integer('kapasitas')->nullable();
            $table->string('proses', 200)->nullable();
            $table->string('ket', 200)->nullable();
            $table->string('ket_status', 200)->nullable();
            $table->enum('status', ['OK', 'Failed'])->nullable()->default('OK')->index('status');
            $table->string('operator', 50)->nullable();
            $table->date('tgl_monitor')->nullable()->index('tbl_monitoring');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('db_dying')->dropIfExists('tbl_monitoring');
    }
};
