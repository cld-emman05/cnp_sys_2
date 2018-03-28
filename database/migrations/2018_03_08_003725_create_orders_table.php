<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('quantity');
            $table->date('due_date');
            $table->string('comments');
            $table->date('delivery_date');

            $table->integer('customer_id')->nullable()->unsigned();
            $table->integer('specification_id')->nullable()->unsigned();
            $table->integer('file_id')->nullable()->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
