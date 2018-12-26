<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->Integer('item_id');
            $table->foreign('item_id')->references('id')->on('items');
            $table->Integer('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('total');
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
        Schema::dropIfExists('transactions');
    }
}
