<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = "products";
    public $timestamps = false;

    // ---- Funções de relacionamento
      
    public function imeis()
    {
        $this->hasMany("\App\IMEIS", "product_id");
    }
}
