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
}
