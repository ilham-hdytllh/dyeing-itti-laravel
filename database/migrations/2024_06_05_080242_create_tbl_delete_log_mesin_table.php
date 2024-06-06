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
        Schema::connection('db_dying')->create('tbl_delete_log_mesin', function (Blueprint $table) {
            $table->integer('id');
            $table->string('user_name', 100)->nullable();
            $table->string('user_ip', 45)->nullable();
            $table->softDeletes()->nullable(false)->useCurrent();
            $table->string('no_mesin', 20);
            $table->string('no_mc_lama', 20)->nullable();
            $table->string('no_mesin_baru', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('db_dying')->dropIfExists('tbl_delete_log_mesin');
    }
};
