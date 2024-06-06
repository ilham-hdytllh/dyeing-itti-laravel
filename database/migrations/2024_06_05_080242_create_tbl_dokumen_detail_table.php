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
        Schema::connection('db_dying')->create('tbl_dokumen_detail', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_dokumen');
            $table->enum('sts', ['Masuk', 'Keluar'])->nullable();
            $table->text('catatan')->nullable();
            $table->date('tgl_status')->nullable();
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
        Schema::connection('db_dying')->dropIfExists('tbl_dokumen_detail');
    }
};
