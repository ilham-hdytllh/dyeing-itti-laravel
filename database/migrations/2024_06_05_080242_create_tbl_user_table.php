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
        Schema::connection('db_dying')->create('tbl_user', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nama', 100);
            $table->string('username', 20);
            $table->string('password', 100)->nullable();
            $table->string('dept', 100)->nullable()->index('dept');
            $table->enum('level', ['1', '2', '3', '4', '5'])->nullable();
            $table->enum('status', ['Aktif', 'Non-Aktif'])->nullable();
            $table->enum('foto', ['avatar', 'avatar2', 'avatar3', 'avatar04', 'avatar5'])->nullable()->default('avatar');
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
        Schema::connection('db_dying')->dropIfExists('tbl_user');
    }
};
