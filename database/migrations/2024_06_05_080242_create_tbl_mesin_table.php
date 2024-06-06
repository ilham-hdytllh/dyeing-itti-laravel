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
        Schema::connection('db_dying')->create('tbl_mesin', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('no_mesin', 20)->unique('no_mesin');
            $table->integer('kapasitas')->index('kapasitas');
            $table->char('l_r', 5);
            $table->string('kode', 10)->nullable();
            $table->string('ket', 200)->nullable();
            $table->integer('waktu_tunggu')->nullable();
            $table->decimal('wt_des', 5)->nullable();
            $table->string('no_mc_lama', 20)->nullable();
            $table->string('no_mesin_baru', 20)->nullable()->index('no_mesin_baru');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('db_dying')->dropIfExists('tbl_mesin');
    }
};
