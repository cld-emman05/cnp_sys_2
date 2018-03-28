<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specifications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->mediumInteger('pages');

            $table->integer('size_id')->nullable()->unsigned();

            $table->integer('cover_paper_id')->nullable()->unsigned();
            $table->integer('cover_color_id')->nullable()->unsigned();
            $table->integer('inside_paper_id')->nullable()->unsigned();
            $table->integer('inside_color_id')->nullable()->unsigned();

            $table->integer('lamination_id')->nullable()->unsigned();
            $table->integer('binding_id')->nullable()->unsigned();
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specifications');
    }
}
