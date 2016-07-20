<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IMEIS extends Model
{
    protected $table = "imeis";
    public $timestamps = false;

    
    // ---- Funções de relacionamento
    
    public function product()
    {
        $this->belongsTo("\App\Products", "product_id");
    }

    public function master()
    {
        $this->belongsTo("\App\Masters", "master_id");
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
}
