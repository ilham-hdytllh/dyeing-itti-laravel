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
        Schema::connection('db_dying')->create('tbl_std_jam', function (Blueprint $table) {
            $table->integer('id', true);
            $table->enum('kode', ['D', 'R', 'D+R', 'OBA'])->nullable();
            $table->string('jenis', 30)->nullable();
            $table->integer('target')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('db_dying')->dropIfExists('tbl_std_jam');
    }
};
