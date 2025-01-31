<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analytics extends Model
{
    use HasFactory;

    protected $fillable = [
        'content_id',
        'event_id',
        'views',
        'likes',
        'comments',
        'shares',
    ];

    // Relasi ke tabel content
    public function content()
    {
        return $this->belongsTo(Content::class);
    }

    // Relasi ke tabel events
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}