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
        Schema::connection('db_dying')->create('tbl_sample_manual', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('nokk', 20)->nullable()->index('nokk');
            $table->string('no_po', 100)->nullable();
            $table->string('no_order', 100)->nullable();
            $table->string('no_warna', 100)->nullable();
            $table->string('warna', 100)->nullable();
            $table->string('jenis_kain', 200)->nullable();
            $table->string('lot', 10)->nullable();
            $table->string('lebar', 10)->nullable();
            $table->string('gramasi', 10)->nullable();
            $table->string('benang', 200)->nullable();
            $table->string('langganan', 200)->nullable();
            $table->string('no_resep', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('db_dying')->dropIfExists('tbl_sample_manual');
    }
};
