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
        Schema::connection('db_dying')->create('tbl_dokumen', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('no_dokumen', 100);
            $table->string('nama_dokumen', 200);
            $table->enum('sts', ['OK', 'Cancel', 'Pending', 'Review'])->nullable()->default('Pending');
            $table->text('catatan')->nullable();
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
        Schema::connection('db_dying')->dropIfExists('tbl_dokumen');
    }
};
