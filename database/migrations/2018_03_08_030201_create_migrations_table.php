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
        Schema::table('users',function(Blueprint $table){
                    $table->foreign('user_type')
                    ->references('id')->on('user_types');
                  });

                 Schema::table('suppliers',function(Blueprint $table){
                              $table->foreign('term_id')
                              ->references('id')->on('terms');

                              $table->foreign('material_id')
                              ->references('id')->on('materials');

                              $table->foreign('payment_id')
                              ->references('id')->on('payments');
                            });

                      Schema::table('raw__materials',function(Blueprint $table){
                                   $table->foreign('specs_id')
                                   ->references('id')->on('specs');

                                   $table->foreign('supplier_id')
                                   ->references('id')->on('suppliers');
                                 });

                                 Schema::table('inside__specs',function(Blueprint $table){
                                              $table->foreign('paper_type_id')
                                              ->references('id')->on('paper__types');

                                              $table->foreign('paper_color_id')
                                              ->references('id')->on('paper__colors');
                                            });

                                Schema::table('cover__specs',function(Blueprint $table){
                                              $table->foreign('paper_type_id')
                                              ->references('id')->on('paper__types');

                                              $table->foreign('paper_color_id')
                                              ->references('id')->on('paper__colors');
                                            });

                                Schema::table('specs',function(Blueprint $table){
                                                   $table->foreign('size_id')
                                                   ->references('id')->on('size__types');

                                                   $table->foreign('cover_id')
                                                   ->references('id')->on('cover__specs');

                                                   $table->foreign('inside_id')
                                                   ->references('id')->on('inside__specs');

                                                   $table->foreign('lamination_id')
                                                   ->references('id')->on('lamination__types');

                                                   $table->foreign('binding_id')
                                                   ->references('id')->on('binding__types');
                                                 });

                      Schema::table('job__type',function(Blueprint $table){
                                        $table->foreign('specs_id')
                                        ->references('id')->on('specs');
                                      });

                      Schema::table('job__orders',function(Blueprint $table){
                                             $table->foreign('job_type_id')
                                             ->references('id')->on('job__type');

                                             $table->foreign('file_id')
                                             ->references('id')->on('file__names');

                                             $table->foreign('user_id')
                                             ->references('id')->on('users');

                                             $table->foreign('quotation_id')
                                             ->references('id')->on('quotations');
                                           });

                    Schema::table('job__order__statuses',function(Blueprint $table){
                                                  $table->foreign('order_id')
                                                  ->references('id')->on('job__orders');
                                                });

                                          Schema::table('quotation__statuses',function(Blueprint $table){
                                                       $table->foreign('quotation_id')
                                                       ->references('id')->on('quotations');
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
