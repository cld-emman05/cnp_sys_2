<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specs', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumInteger('quantity');
            $table->mediumInteger('description');

            $table->integer('size_id')->nullable()->unsigned();
            $table->integer('cover_id')->nullable()->unsigned();
            $table->integer('inside_id')->nullable()->unsigned();
            $table->integer('lamination_id')->nullable()->unsigned();
            $table->integer('binding_id')->nullable()->unsigned();

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
        Schema::dropIfExists('specs');
    }
}
