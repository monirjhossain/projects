<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParentCategory extends Model
{
    protected $fillable = ['name','status'];

    protected $hidden = [
        '_token',
    ];
}
