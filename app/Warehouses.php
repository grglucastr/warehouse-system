<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warehouses extends Model
{
    protected $table = "warehouses";
    public $timestamps = false;
    
    // ---- Funções de relacionamento

    public function pallets_current_warehouses()
    {
        $this->hasMany("\App\Pallets", "warehouse_current_id");
    }

    public function masters_current_warehouses()
    {
        $this->hasMany("\App\Masters", "warehouse_current_id");
    }

    public function imeis_current_warehouses()
    {
        $this->hasMany("\App\IMEIS", "warehouse_current_id");
    }

    public function pallets_destiny_warehouses()
    {
        $this->hasMany("\App\Pallets", "warehouse_destiny_id");
    }

    public function masters_destiny_warehouses()
    {
        $this->hasMany("\App\Masters", "warehouse_destiny_id");
    }

    public function imeis_destiny_warehouses()
    {
        $this->hasMany("\App\IMEIS", "warehouse_destiny_id");
    }

    public function warehouse_limit_origin_warehouses()
    {
        $this->hasMany("\App\IMEIS", "warehouse_origin_id");
    }

    public function warehouse_limit_destiny_warehouses()
    {
        $this->hasMany("\App\IMEIS", "warehouse_destiny_id");
    }
}
