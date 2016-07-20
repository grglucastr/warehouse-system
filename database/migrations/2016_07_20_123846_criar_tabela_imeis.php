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
        Schema::create("imeis", function(Blueprint $table){
            $table->increments("id");
            $table->string("code");
            $table->integer("product_id")->unsigned()->index();
            $table->integer("master_id")->unsigned()->index();
            $table->integer("status_id")->unsigned()->index();
            $table->integer("warehouse_current_id")->unsigned()->index();
            $table->integer("warehouse_destiny_id")->unsigned()->index();

            $table->foreign("product_id")->references("id")
                                         ->on("products")
                                         ->onDelete("cascade");
            
            
            $table->foreign("master_id")->references("id")
                                        ->on("masters")
                                        ->onDelete("cascade");
            
            $table->foreign("status_id")->references("id")
                                        ->on("status")
                                        ->onDelete("cascade");

            $table->foreign("warehouse_current_id")->references("id")
                                                   ->on("warehouses")
                                                   ->onDelete("cascade");

            $table->foreign("warehouse_destiny_id")->references("id")
                                                   ->on("warehouses")
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
        Schema::drop("imeis");
    }
}
