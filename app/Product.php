<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public function categories(){
        return $this->belongsTo(AdminCategories::class,'category_id ');
    }
}
