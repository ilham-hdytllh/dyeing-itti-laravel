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
        Schema::connection('db_dying')->create('tbl_bonkain', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('id_nsp')->nullable()->index('id_nsp');
            $table->string('buyer', 100)->nullable();
            $table->string('kd_ganti', 10)->nullable();
            $table->string('no_bon', 11)->nullable()->index('no_bon');
            $table->string('no_order', 20)->nullable()->index('no_order');
            $table->enum('alasan', ['Reject Buyer', 'Kurang Qty'])->nullable();
            $table->string('sebab', 200)->nullable();
            $table->text('analisa')->nullable();
            $table->text('pencegahan')->nullable();
            $table->string('warna1')->nullable();
            $table->string('warna2')->nullable();
            $table->string('warna3')->nullable();
            $table->double('kg1', 12, 2)->nullable();
            $table->double('kg2', 12, 2)->nullable();
            $table->double('kg3', 12, 2)->nullable();
            $table->double('pjg1', 12, 2)->nullable();
            $table->double('pjg2', 12, 2)->nullable();
            $table->double('pjg3', 12, 2)->nullable();
            $table->enum('satuan1', ['yard', 'meter', 'pcs'])->nullable();
            $table->enum('satuan2', ['yard', 'meter', 'pcs'])->nullable();
            $table->enum('satuan3', ['yard', 'meter', 'pcs'])->nullable();
            $table->char('nokk1', 16)->nullable();
            $table->char('nokk2', 16)->nullable();
            $table->char('nokk3', 16)->nullable();
            $table->string('lot1', 20)->nullable();
            $table->string('lot2', 20)->nullable();
            $table->string('lot3', 20)->nullable();
            $table->date('tgl_buat')->nullable();
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
        Schema::connection('db_dying')->dropIfExists('tbl_bonkain');
    }
};
