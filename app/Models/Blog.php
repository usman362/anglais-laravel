<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'image',
        'content',
        'is_published',
        'user_id',
        'uuid',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id',);
    }
}
