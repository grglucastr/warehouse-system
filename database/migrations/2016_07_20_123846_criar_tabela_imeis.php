<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaImeis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("imei", function(Blueprint $table){
            $table->increments("id");
            $table->string("code");
            $table->integer("product_id")->unsigned()->index();
            $table->integer("master_id")->unsigned()->index();
            $table->integer("status_id")->unsigned()->index();
            $table->integer("warehouse_current")->unsigned()->index();
            $table->integer("warehouse_destiny")->unsigned()->index();

            $table->foreign("product_id")->references("id")
                                         ->on("product")
                                         ->onDelete("cascade");
            
            
            $table->foreign("master_id")->references("id")
                                        ->on("master")
                                        ->onDelete("cascade");
            
            $table->foreign("status_id")->references("id")
                                        ->on("status")
                                        ->onDelete("cascade");

            $table->foreign("warehouse_current")->references("id")
                                                   ->on("warehouse")
                                                   ->onDelete("cascade");

            $table->foreign("warehouse_destiny")->references("id")
                                                   ->on("warehouse")
                                                   ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("imei");
    }
}
