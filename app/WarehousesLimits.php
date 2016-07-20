<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WarehousesLimits extends Model
{
    protected $table = "warehouses_limits";
    public $timestamps = false;

    // ---- Funções de relacionamento
    public function warehouse_origin()
    {
        $this->belongsTo("\App\Warehouses", "warehouse_origin_id");
    }

    public function warehouse_destiny()
    {
        $this->belongsTo("\App\Warehouses", "warehouse_destiny_id");
    }
}
