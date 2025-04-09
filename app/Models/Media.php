<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'media';
    protected $fillable = [
        'media_type',
        'media_url',
        'position',
        'alt_text'
    ];
    public function scopePosition($query, $order)
    {
        return $query->orderBy('position', $order);
    }
    public function mediable()
    {
        return $this->morphTo();
    }
}
