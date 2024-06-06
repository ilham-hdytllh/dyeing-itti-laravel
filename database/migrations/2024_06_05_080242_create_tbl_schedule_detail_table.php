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
        Schema::connection('db_dying')->create('tbl_schedule_detail', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('id_schedule')->nullable()->index('id_schedule');
            $table->string('no_urut')->nullable();
            $table->string('no_mesin')->nullable();
            $table->string('userid', 0)->nullable();
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
        Schema::connection('db_dying')->dropIfExists('tbl_schedule_detail');
    }
};
