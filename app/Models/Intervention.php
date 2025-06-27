<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Intervention extends Model
{
    protected $fillable = [
        'employee_id',
        'client_id',
        'intervention_date',
        'notes',
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
