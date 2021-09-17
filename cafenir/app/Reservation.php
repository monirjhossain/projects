<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['name','email','phone','address','date','time','category','quantity','message'];


        public function reservation_category(){
            return $this->belongsTo(Category::class, 'category');        
        
        }

}
