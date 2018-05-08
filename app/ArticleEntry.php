<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleEntry extends Model
{
    protected $table = 'article_entries';
    protected $primaryKey = 'article_entry_id';
}
