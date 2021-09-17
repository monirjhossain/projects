<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    protected $fillable = ['name','category_photo', 'parent_category_id'];


    public function Parent_category(){
           return $this->belongsTo(ParentCategory::class);
        } 

    public function reservations(){
           return $this->hasMany(Reservation::class);
        } 

}

