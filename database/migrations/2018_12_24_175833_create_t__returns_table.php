<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTReturnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t__returns', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('transaction_id');
            $table->foreign('transaction_id')->references('id')->on('transactions');
            $table->integer('total');
            $table->string('note', 100);
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
        Schema::dropIfExists('t__returns');
    }
}
