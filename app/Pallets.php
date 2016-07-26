<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pallet extends Model
{
    protected $table = "pallet";
    public $timestamps = false;

    // ---- Funções de relacionamento
  
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

    public function masters()
    {
        $this->hasMany("\App\Master", "pallet_id");
    }
}
