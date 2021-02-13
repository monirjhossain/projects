<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'parent_id',
        'meta_description',
        'meta_title',
        'meta_keyword',
        'status',
    ];
    protected $hidden = [
        '_token',
    ];
}
