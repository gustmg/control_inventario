<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    protected $primaryKey = 'client_id';

    public function company(){
        return $this->belongsTo('App\Companies','company_id');
    }
}
