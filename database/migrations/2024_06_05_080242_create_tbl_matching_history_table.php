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
        Schema::connection('db_dying')->create('tbl_matching_history', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('id_matching')->nullable();
            $table->string('pemberi_resep')->nullable();
            $table->string('acc_resep')->nullable();
            $table->string('ok_ke')->nullable();
            $table->string('operator_matcher')->nullable();
            $table->string('note')->nullable();
            $table->dateTime('creationdatetime')->nullable();
            $table->dateTime('acc_creationdatetime')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('db_dying')->dropIfExists('tbl_matching_history');
    }
};
