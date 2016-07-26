<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IMEI extends Model
{
    protected $table = "imei";
    public $timestamps = false;

    
    // ---- Funções de relacionamento
    
    public function product()
    {
        $this->belongsTo("\App\Product", "product_id");
    }

    public function master()
    {
        $this->belongsTo("\App\Master", "master_id");
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
}
