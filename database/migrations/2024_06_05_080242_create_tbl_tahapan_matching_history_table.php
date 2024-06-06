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
        Schema::connection('db_dying')->create('tbl_tahapan_matching_history', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_matching')->nullable();
            $table->string('operator_matcher', 200)->nullable();
            $table->dateTime('created_at');
            $table->integer('id_tahapan')->nullable();
            $table->string('tahapan', 200)->nullable();
            $table->string('percobaan_ke', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('db_dying')->dropIfExists('tbl_tahapan_matching_history');
    }
};
