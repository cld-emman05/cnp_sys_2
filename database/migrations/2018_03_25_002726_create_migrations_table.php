<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMigrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      // for users
      Schema::table('employees', function(Blueprint $table){
        $table->foreign('user_id')
        ->references('id')->on('users');

        $table->foreign('department_id')
        ->references('id')->on('departments');
      });

      Schema::table('agents', function(Blueprint $table){
        $table->foreign('employee_id')
        ->references('id')->on('employees');

        $table->foreign('industry_id')
        ->references('id')->on('industries');
      });

      Schema::table('customers', function(Blueprint $table){
        $table->foreign('user_id')
        ->references('id')->on('users');

        $table->foreign('industry_id')
        ->references('id')->on('industries');

        $table->foreign('agent_id')
        ->references('id')->on('agents');
      });

      // for specifications
      Schema::table('inside_papers', function(Blueprint $table){
        $table->foreign('paper_type_id')
        ->references('id')->on('paper_types');
      });

      Schema::table('cover_papers', function(Blueprint $table){
        $table->foreign('paper_type_id')
        ->references('id')->on('paper_types');
      });

      Schema::table('specifications', function(Blueprint $table){
        $table->foreign('binding_id')
        ->references('id')->on('binding_types');

        $table->foreign('lamination_id')
        ->references('id')->on('lamination_types');

        $table->foreign('inside_color_id')
        ->references('id')->on('colors');

        $table->foreign('inside_paper_id')
        ->references('id')->on('inside_papers');

        $table->foreign('cover_color_id')
        ->references('id')->on('colors');

        $table->foreign('cover_paper_id')
        ->references('id')->on('cover_papers');

        $table->foreign('size_id')
        ->references('id')->on('sizes');
      });

      // for orders
      Schema::table('orders', function(Blueprint $table){
        $table->foreign('customer_id')
        ->references('id')->on('customers');

        $table->foreign('specification_id')
        ->references('id')->on('specifications');

        $table->foreign('file_id')
        ->references('id')->on('files');
      });

      Schema::table('files', function(Blueprint $table){
        $table->foreign('version')
        ->references('id')->on('revisions');
      });

      Schema::table('order_statuses', function(Blueprint $table){
        $table->foreign('order_id')
        ->references('id')->on('orders');

        $table->foreign('phase_id')
        ->references('id')->on('phases');
      });

    // for quotation_statuses
    Schema::table('quotation_statuses', function(Blueprint $table){
      $table->foreign('quotation_id')
      ->references('id')->on('quotations');

      $table->foreign('status_id')
      ->references('id')->on('statuses');
    });

    Schema::table('quotations', function(Blueprint $table){
      $table->foreign('order_id')
      ->references('id')->on('orders');
    });

    // for purchasing and supplies
    Schema::table('suppliers', function(Blueprint $table){
      $table->foreign('term_id')
      ->references('id')->on('terms');

      $table->foreign('material_id')
      ->references('id')->on('materials');

      $table->foreign('payment_id')
      ->references('id')->on('payments');
    });

    Schema::table('raw_materials', function(Blueprint $table){
      $table->foreign('order_id')
      ->references('id')->on('orders');

      $table->foreign('supplier_id')
      ->references('id')->on('suppliers');
    });

    Schema::table('materials', function(Blueprint $table){
      $table->foreign('paper_type_id')
      ->references('id')->on('paper_types');
    });
  }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('migrations');
    }
}
