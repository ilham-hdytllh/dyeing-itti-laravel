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
        Schema::connection('db_dying')->create('tbl_ncp', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('no_ncp')->unique('no_ncp');
            $table->string('dept')->nullable();
            $table->string('jenis', 100)->nullable();
            $table->string('note')->nullable();
            $table->date('tgl_ncp')->nullable();
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
        Schema::connection('db_dying')->dropIfExists('tbl_ncp');
    }
};
