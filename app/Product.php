<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "product";
    public $timestamps = false;

    // ---- Funções de relacionamento
      
    public function imeis()
    {
        $this->hasMany("\App\IMEI", "product_id");
    }
}
