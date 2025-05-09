<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'category_name',
    ];

    public function subCategories()
    {
        return $this->hasMany('App\Models\SubCategory'); 
    }

    public function products()
    {
        return $this->hasMany('App\Models\Products'); 
    }
}
