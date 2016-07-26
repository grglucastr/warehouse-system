<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    protected $table = "master";
    public $timestamps = false;

    // ---- Funções de relacionamento
      
    public function pallet()
    {
        $this->belongsTo("\App\Pallet", "pallet_id");
    }

    public function status()
    {
        $this->belongsTo("\App\Status", "status_id");
    }

    public function warehouse_current()
    {
        $this->belongsTo("\App\Warehouse", "warehouse_current");
    }

    public function warehouse_destiny()
    {
        $this->belongsTo("\App\Warehouse", "warehouse_destiny");
    }

    public function imeis()
    {
        $this->hasMany("\App\IMEI", "master_id");
    }
}
