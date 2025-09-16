<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientLogo extends Model
{
    protected $table = 'client_logos';
    protected $fillable = [
        'client_name',
        'status',
        'alt_text',
        'logo_image',
        'position'
    ];

    public function scopePosition($query, $order)
    {
        return $query->orderBy('position', $order);
    }
    public function scopeStatus($query, $type)
    {
        return $query->where('status', $type);
    }
}
