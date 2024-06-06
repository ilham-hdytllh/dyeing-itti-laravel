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
        Schema::connection('db_dying')->create('tbl_staff', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nama', 50)->nullable()->index('nama');
            $table->enum('jabatan', ['Operator', 'Staff', 'Colorist', 'Leader', 'Asst. SPV', 'SPV', 'Manager', 'Asst. Manager', 'Senior Manager', 'DMF'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('db_dying')->dropIfExists('tbl_staff');
    }
};
