<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    protected $table = 'article_categories';
    protected $primaryKey = 'article_category_id';

    public function company(){
        return $this->belongsTo('App\Companies','company_id');
    }
}
