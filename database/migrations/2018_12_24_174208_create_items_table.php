<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item_name',50);
            $table->string('item_description',100);
            $table->Integer('category_id');
            $table->foreign('category_id')->references('id')->on('item_categories');
            $table->Integer('supplier_id');
            $table->foreign('supplier_id')->references('id')->on('supliers');
            $table->Integer('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('price',5);
            $table->integer('total');
            $table->string('unit',20);
            $table->string('code_item',10);
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
        Schema::dropIfExists('items');
    }
}
