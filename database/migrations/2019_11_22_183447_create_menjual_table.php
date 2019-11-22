<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenjualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menjual', function (Blueprint $table) {
            // field
            $table->bigIncrements('id_menjual');
            $table->bigInteger('id_bank_sampah');
            $table->bigInteger('id_pengepul');
            $table->bigInteger('id_tranksaksi_sampah');
            $table->bigIncrements('total_harga');

            // foreign key
            $table->foreign('id_bank_sampah')->references('id_bank_sampah')->on('tb_bank_sampah');
            $table->foreign('id_pengepul')->references('id_pengepul')->on('pengepul');
            $table->foreign('id_tranksaksi_sampah')->references('id_tranksaksi_sampah')->on('tranksaksi_sampah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menjual');
    }
}
