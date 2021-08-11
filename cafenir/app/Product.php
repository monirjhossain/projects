<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
    protected $fillable = ['name', 'p_category', 'price', 'product_photo'];

    public function category(){
        return $this->belongsTo(Category::class, 'p_category', 'id');
    }
}