<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    protected $table = "warehouse";
    public $timestamps = false;
    
    // ---- Funções de relacionamento

    public function pallets_current_warehouses()
    {
        $this->hasMany("\App\Pallet", "warehouse_current");
    }

    public function pallets_destiny_warehouses()
    {
        $this->hasMany("\App\Pallet", "warehouse_destiny");
    }

    public function masters_current_warehouses()
    {
        $this->hasMany("\App\Master", "warehouse_current");
    }

    public function masters_destiny_warehouses()
    {
        $this->hasMany("\App\Master", "warehouse_destiny");
    }

    public function imeis_current_warehouses()
    {
        $this->hasMany("\App\IMEI", "warehouse_current");
    }

    public function imeis_destiny_warehouses()
    {
        $this->hasMany("\App\IMEI", "warehouse_destiny");
    }

    public function warehouse_limit_origin_warehouses()
    {
        $this->hasMany("\App\WarehouseLimits", "warehouse_origin_id");
    }

    public function warehouse_limit_target_warehouses()
    {
        $this->hasMany("\App\WarehouseLimits", "warehouse_target_id");
    }
}
