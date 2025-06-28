<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'date',
        'start_time',
        'end_time',
        'user_id',
        'employee_id',
        'client_id',
        'notes'
    ];

    public function employee()
    {
        return $this->hasOne(User::class, 'id', 'employee_id');
    }

    public function client()
    {
        return $this->hasOne(User::class, 'id', 'client_id');
    }
}
