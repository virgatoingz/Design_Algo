<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'content_id',
        'event_id',
        'user_id',
        'rating',
        'comment',
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

    // Relasi ke tabel users
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}