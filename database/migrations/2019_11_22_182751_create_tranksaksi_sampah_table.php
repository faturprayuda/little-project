<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTranksaksiSampahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tranksaksi_sampah', function (Blueprint $table) {
            //field
            $table->bigIncrements('id_tranksaksi_sampah');
            $table->bigInteger('id_masyarakat')->unsigned();
            $table->bigInteger('id_bank_sampah')->unsigned();
            $table->integer('total_harga');

            //foreign key
            $table->foreign('id_masyarakat')->references('id_masyarakat')->on('masyarakats');
            $table->foreign('id_bank_sampah')->references('id_bank_sampah')->on('tb_bank_sampahs');
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
        Schema::dropIfExists('tranksaksi_sampah');
    }
}
