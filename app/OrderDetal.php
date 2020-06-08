<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class OrderDetal extends Model
{
    public $timestamps = false;

    protected $table = 'order_details';
    protected $fillable = ['order_id' ,'product_id','quantity','price' ];

}
