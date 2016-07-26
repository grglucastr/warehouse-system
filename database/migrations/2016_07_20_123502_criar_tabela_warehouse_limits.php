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
        Schema::create("warehouse_limits", function(Blueprint $table){
            $table->increments("id");
            $table->integer("warehouse_origin_id")->unsigned()->index();
            $table->integer("warehouse_target_id")->unsigned()->index();
            
            $table->foreign("warehouse_origin_id")->references("id")
                  ->on("warehouse")
                  ->onDelete("cascade");

            $table->foreign("warehouse_target_id")->references("id")
                  ->on("warehouse")
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
        Schema::drop("warehouse_limits");
    }
}
