<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transacciones', function (Blueprint $table) {
            $table->increments('cod_transaccion');
            $table->integer('cod_usuario');
            $table->integer('cod_estado');
            $table->integer('flowOrder');

            $table->string('subject');
            $table->bigInteger('amount');
            $table->string('paymentMedia');
            $table->string('payerEmail');
            $table->integer('paymenteFee');
            $table->integer('paymenteTaxes');
            $table->integer('paymenteBalance');
            $table->timestamp('requestDate');
            $table->timestamp('paymentDate');
            $table->timestamp('paymenteTransferDate');

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
        Schema::dropIfExists('transacciones');
    }
}
