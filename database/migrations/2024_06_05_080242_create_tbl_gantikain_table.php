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
        Schema::connection('db_dying')->create('tbl_gantikain', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('nokk', 15)->nullable()->index('nokk');
            $table->string('nodemand', 20)->nullable();
            $table->string('langganan', 200)->nullable();
            $table->string('no_order', 50)->nullable()->index('no_order');
            $table->string('po', 200)->nullable();
            $table->string('no_hanger', 30)->nullable()->index('no_hanger');
            $table->string('no_item', 30)->nullable();
            $table->string('warna', 200)->nullable();
            $table->string('no_warna', 200)->nullable();
            $table->string('lot', 20)->nullable();
            $table->integer('lebar')->nullable();
            $table->integer('gramasi')->nullable();
            $table->text('masalah')->nullable();
            $table->text('ket')->nullable();
            $table->enum('t_jawab', ['KNT', 'DYE', 'LAB', 'FIN', 'MKT', 'QCF', 'KNK', 'RMP', 'PPC', 'BRS', 'GKG', 'GKJ', 'CST', 'PRO', 'PRT'])->nullable();
            $table->enum('t_jawab1', ['KNT', 'DYE', 'LAB', 'FIN', 'MKT', 'QCF', 'KNK', 'RMP', 'PPC', 'BRS', 'GKG', 'GKJ', 'CST', 'PRO', 'PRT'])->nullable();
            $table->enum('t_jawab2', ['KNT', 'DYE', 'LAB', 'FIN', 'MKT', 'QCF', 'KNK', 'RMP', 'PPC', 'BRS', 'GKG', 'GKJ', 'CST', 'PRO', 'PRT'])->nullable();
            $table->integer('persen')->nullable();
            $table->integer('persen1')->nullable();
            $table->integer('persen2')->nullable();
            $table->string('jenis_kain', 200)->nullable();
            $table->string('styl')->nullable();
            $table->decimal('qty_kirim', 12)->nullable();
            $table->decimal('qty_claim', 12)->nullable();
            $table->decimal('qty_order', 12)->nullable();
            $table->decimal('qty_foc', 12)->nullable();
            $table->string('personil')->nullable();
            $table->enum('shift', ['A', 'B', 'C', 'Non-Shift'])->nullable();
            $table->string('penyebab')->nullable();
            $table->enum('satuan_o', ['KG', 'PCS'])->nullable();
            $table->enum('satuan_k', ['KG', 'PCS'])->nullable();
            $table->enum('satuan_c', ['KG', 'PCS'])->nullable();
            $table->enum('sts', ['1', '0'])->nullable()->default('0');
            $table->enum('sts_red', ['1', '0'])->nullable()->default('0');
            $table->date('tgl_email')->nullable();
            $table->date('tgl_buat')->nullable()->index('tgl_buat');
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
        Schema::connection('db_dying')->dropIfExists('tbl_gantikain');
    }
};
