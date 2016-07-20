<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pallets extends Model
{
    protected $table = "pallets";
    public $timestamps = false;

    // ---- Funções de relacionamento
  
    public function status()
    {
        $this->belongsTo("\App\Status", "status_id");
    }

    public function warehouse_current()
    {
        $this->belongsTo("\App\Warehouses", "warehouse_current_id");
    }

    public function warehouse_destiny()
    {
        $this->belongsTo("\App\Warehouses", "warehouse_destiny_id");
    }

    public function masters()
    {
        $this->hasMany("\App\Masters", "pallet_id");
    }
}
