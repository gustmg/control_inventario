<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $primaryKey = 'service_id';

    public function company(){
        return $this->belongsTo('App\Companies','company_id');
    }
}
