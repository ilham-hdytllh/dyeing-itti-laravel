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
        Schema::connection('db_dying')->create('tbl_salahresep', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('id_celup')->nullable()->unique('id_celup');
            $table->string('nokk', 20)->nullable()->index('nokk');
            $table->enum('shift', ['1', '2', '3'])->nullable();
            $table->enum('g_shift', ['A', 'B', 'C'])->nullable();
            $table->string('jenis_kesalahan', 100)->nullable();
            $table->string('t_jawab1', 50)->nullable();
            $table->string('t_jawab2', 50)->nullable();
            $table->text('ket')->nullable();
            $table->dateTime('tgl_buat')->nullable()->index('tgl_buat');
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
        Schema::connection('db_dying')->dropIfExists('tbl_salahresep');
    }
};
