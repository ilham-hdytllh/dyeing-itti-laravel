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
        Schema::connection('db_dying')->table('tbl_ncp_detail', function (Blueprint $table) {
            $table->foreign(['id_ncp'], 'id_ncp')->references(['id'])->on('tbl_ncp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('db_dying')->table('tbl_ncp_detail', function (Blueprint $table) {
            $table->dropForeign('id_ncp');
        });
    }
};
