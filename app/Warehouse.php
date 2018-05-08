<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    protected $table = 'warehouses';
    protected $primaryKey = 'warehouse_id';

    public function company(){
        return $this->belongsTo('App\Companies','company_id');
    }
}
