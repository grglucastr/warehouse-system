<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WarehouseLimits extends Model
{
    protected $table = "warehouse_limits";
    public $timestamps = false;

    // ---- Funções de relacionamento
    public function warehouse_origin()
    {
        $this->belongsTo("\App\Warehouse", "warehouse_origin_id");
    }

    public function warehouse_target()
    {
        $this->belongsTo("\App\Warehouse", "warehouse_target_id");
    }
}
