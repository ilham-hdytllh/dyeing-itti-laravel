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
        Schema::connection('db_dying')->create('tbl_ncp_detail', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('id_ncp')->index('id_ncp');
            $table->string('nokk', 15);
            $table->string('acc_celup', 100)->nullable();
            $table->date('tgl_proses')->nullable();
            $table->string('no_mc', 30)->nullable();
            $table->string('shift', 2)->nullable();
            $table->string('peng_jawab', 100)->nullable();
            $table->string('perbaikan', 100)->nullable();
            $table->string('analisa', 200)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('db_dying')->dropIfExists('tbl_ncp_detail');
    }
};
