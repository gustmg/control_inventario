<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BranchOffice extends Model
{
    protected $table = 'branch_offices';
    protected $primaryKey = 'branch_office_id';

    public function company(){
        return $this->belongsTo('App\Companies','company_id');
    }
}
