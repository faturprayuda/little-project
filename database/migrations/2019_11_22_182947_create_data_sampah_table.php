<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataSampahTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('data_sampah', function (Blueprint $table) {
      //field
      $table->bigIncrements('id_data_sampah');
      $table->bigInteger('id_bank_sampah');
      $table->bigInteger('id_trabast');
      $table->bigInteger('id_industri');
      $table->integer('jumlah_total');

      //foreign key
      $table->foreign('id_bank_sampah')->references('id_bank_sampah')->on('tb_bank_sampah');
      $table->foreign('id_trabast')->references('id_trabast')->on('tb_trabast');
      $table->foreign('id_industri')->references('id_industri')->on('tb_industri');
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
    Schema::dropIfExists('data_sampah');
  }
}
