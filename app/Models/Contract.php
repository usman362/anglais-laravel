<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'file_path'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
