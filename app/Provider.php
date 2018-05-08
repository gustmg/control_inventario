<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table = 'providers';
    protected $primaryKey = 'provider_id';

    public function company(){
        return $this->belongsTo('App\Companies','company_id');
    }
}
