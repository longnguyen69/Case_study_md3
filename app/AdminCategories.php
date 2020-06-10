<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminCategories extends Model
{
    protected $table = 'categories';

    public function products(){
        return $this->hasMany(Product::class,'category_id');
    }
    public function total(){
        return $this->products()->count();
    }
}
