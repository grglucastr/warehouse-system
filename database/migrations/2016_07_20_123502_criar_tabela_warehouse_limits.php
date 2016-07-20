<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaWarehouseLimits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("warehouses_limits", function(Blueprint $table){
            $table->increments("id");
            $table->integer("warehouse_origin_id")->unsigned()->index();
            $table->integer("warehouse_destiny_id")->unsigned()->index();
            
            $table->foreign("warehouse_origin_id")->references("id")
                  ->on("warehouses")
                  ->onDelete("cascade");

            $table->foreign("warehouse_destiny_id")->references("id")
                  ->on("warehouses")
                  ->onDelete("cascade");

            $table->decimal("limit")->unsigned();     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("warehouses_limits");
    }
}
