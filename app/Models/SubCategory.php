<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table = 'sub_categories';
    protected $fillable = [
        'category_id',
        'sub_category_name',
        'status',
    ];

    public function Category()
    {
        return $this->belongsTo('App\Models\Category'); 
    }
}
