<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RawMaterialCategory extends Model
{
    protected $table = 'raw_material_categories';
    protected $primaryKey = 'raw_material_category_id';

    public function company(){
        return $this->belongsTo('App\Companies','company_id');
    }
}
