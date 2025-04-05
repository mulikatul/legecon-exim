<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $table = 'testimonials';
    protected $fillable = [
        'client_name',
        'company_name',
        'alt_text',
        'description',
        'position',
        'status'
    ];

    public function scopePosition($query, $order)
    {
        return $query->orderBy('position', $order);
    }
}
