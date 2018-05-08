<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RawMaterial extends Model
{
    protected $table = 'raw_materials';
    protected $primaryKey = 'raw_material_id';

    public function warehouse(){
        return $this->belongsTo('App\Warehouses','warehouse_id');
    }
}
