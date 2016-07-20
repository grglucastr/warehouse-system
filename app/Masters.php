<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masters extends Model
{
    protected $table = "masters";
    public $timestamps = false;

    // ---- Funções de relacionamento
      
    public function pallet()
    {
        $this->belongsTo("\App\Pallets", "pallet_id");
    }

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

    public function imeis()
    {
        $this->hasMany("\App\IMEIS", "master_id");
    }
}
