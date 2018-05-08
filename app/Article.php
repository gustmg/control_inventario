<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $primaryKey = 'article_id';

    public function company(){
        return $this->belongsTo('App\Companies','company_id');
    }
}
