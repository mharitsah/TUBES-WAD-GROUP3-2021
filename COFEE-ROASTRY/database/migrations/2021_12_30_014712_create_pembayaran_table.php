<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pembayaran')->primary();
            $table->bigInteger('id_transaksi')->unsigned();
            $table->foreign('id_transaksi')->references('id')->on('transaksi');
            $table->date('tanggal_bayar');
            $table->bigInteger('total_bayar');
            $table->string('bukti_transfer');
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
        Schema::dropIfExists('pembayaran');
    }
}
