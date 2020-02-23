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
            $table->integer('invoice_id');
            $table->integer('cod_estado')->nullable();
            $table->integer('flowOrder')->nullable();

            $table->string('subject');
            $table->unsignedBigInteger('amount');
            $table->string('paymentMedia')->nullable();
            $table->string('payerEmail')->nullable();
            $table->integer('paymenteFee')->nullable();
            $table->integer('paymenteTaxes')->nullable();
            $table->integer('paymenteBalance')->nullable();
            $table->timestamp('requestDate')->nullable();
            $table->timestamp('paymentDate')->nullable();
            $table->timestamp('paymentTransferDate')->nullable();

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
