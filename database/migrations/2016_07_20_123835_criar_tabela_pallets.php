<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaPallets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("pallets", function(Blueprint $table){
            $table->increments("id");
            $table->string("code");
            $table->integer("status_id")->unsigned()->index();
            $table->integer("warehouse_current_id")->unsigned()->index();
            $table->integer("warehouse_destiny_id")->unsigned()->index();

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
        Schema::drop("pallets");
    }
}
