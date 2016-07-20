<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = "status";
    public $timestamps = false;

    // ---- Funções de relacionamento
      
    public function pallets()
    {
        $this->hasMany("\App\Pallets", "status_id");
    }

    public function masters()
    {
        $this->hasMany("\App\Masters", "status_id");
    }

    public function imeis()
    {
        $this->hasMany("\App\IMEIS", "status_id");
    }
}
