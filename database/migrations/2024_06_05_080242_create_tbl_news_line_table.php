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
        Schema::connection('db_dying')->create('tbl_news_line', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('gedung', 30)->nullable();
            $table->text('news_line')->nullable();
            $table->dateTime('tgl_update')->nullable();
            $table->enum('status', ['Tampil', 'Tidak Tampil'])->nullable()->default('Tampil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('db_dying')->dropIfExists('tbl_news_line');
    }
};
