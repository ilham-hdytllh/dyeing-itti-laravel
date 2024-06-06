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
        Schema::connection('db_dying')->create('tbl_masalah_celupan', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('id_hasilcelup');
            $table->string('inspektor', 100)->nullable();
            $table->string('masalah', 200)->nullable();
            $table->string('tidakan_perbaikan', 200)->nullable();
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
        Schema::connection('db_dying')->dropIfExists('tbl_masalah_celupan');
    }
};
