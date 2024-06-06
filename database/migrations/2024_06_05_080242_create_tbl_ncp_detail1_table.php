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
        Schema::connection('db_dying')->create('tbl_ncp_detail1', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('id_ncp')->nullable();
            $table->string('no_ncp', 50)->nullable();
            $table->string('nokk', 20)->nullable();
            $table->string('acc_celup', 100)->nullable();
            $table->date('tgl_proses')->nullable();
            $table->string('no_mc', 30)->nullable();
            $table->string('shift', 2)->nullable();
            $table->string('peng_jawab', 100)->nullable();
            $table->string('perbaikan', 200)->nullable();
            $table->string('analisa', 250)->nullable();
            $table->enum('status', ['Sedang Perbaikan', 'Bisa diperbaiki', 'Tidak Bisa diperbaiki'])->nullable()->default('Sedang Perbaikan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('db_dying')->dropIfExists('tbl_ncp_detail1');
    }
};
