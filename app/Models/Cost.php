<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    protected $fillable = [
        'name',
        'amount',
        'date_cost',
        'note',
        'image',
    ];
}
