<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCartaoIdToContasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contas', function (Blueprint $table) {
            $table->foreignId('cartao_id')->constrained('cartaos')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contas', function (Blueprint $table) {
            $table->dropForeign(['cartao_id']); 
            $table->dropColumn('cartao_id'); 
        });
    }
}
