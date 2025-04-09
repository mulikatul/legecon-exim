<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Services\MediaService;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'category_id',
        'sub_category_id',
        'title',
        'slug',
        'meta_title',
        'meta_description',
        'description',
        'status',
    ];
    public static function boot() 
    {
        parent::boot();

        Product::deleting(function($model) 
        {     
            $mediaService = new MediaService();
            $medias = Media::where('mediable_id',$model->id)->where('mediable_type','App\Models\Product')->get();

            foreach($medias as $media){
               
                $mediaService->deleteFile($media['media_url']);
                $media->delete();
            }
            
        });
    }
    public function category()
    {
        return $this->belongsTo('App\Models\Category'); 
    }
    public function subCategory()
    {
        return $this->belongsTo('App\Models\SubCategory'); 
    }

    public function media()
    {
        return $this->morphMany('App\Models\Media', 'mediable');
    }
}
