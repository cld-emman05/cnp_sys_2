<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsideSpecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inside__specs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->timestamps();

            $table->integer('paper_type_id')->nullable()->unsigned();
            $table->integer('paper_color_id')->nullable()->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inside__specs');
    }
}
